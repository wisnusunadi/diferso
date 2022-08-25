<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DashController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function show_port()
    {
        $data = Portfolio::all();
        return view('admin.dashboard.portfolio.show',['data'=>$data]);
    }
    public function show_article()
    {
        $data = Article::all();
        return view('admin.dashboard.article.show',['data'=>$data]);
    }
    public function single_article($id)
    {
        $data = Article::find($id);
        return view('admin.dashboard.article.single',['data'=>$data]);
    }

    public function create_port()
    {
        return view('admin.dashboard.portfolio.create');
    }

    public function create_article()
    {
        $c = Category::all();
        return view('admin.dashboard.article.create',['c' => $c]);
    }

    public function edit_port($id)
    {
        $data = Portfolio::find($id);
        return view('admin.dashboard.portfolio.edit',['data' => $data]);
    }

    public function edit_article($id)
    {
        $data = Article::find($id);
        $c = Category::all();
        return view('admin.dashboard.article.edit',['data' => $data,'c' => $c]);
    }
    public function update_port($id, Request $request)
    {

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', "Unable to update data, please check your form");
        } else {
            $portfolio = Portfolio::find($id);
            if ($request->hasFile('thumbnail')) {
                if ($request->thumbnail != $portfolio->thumbnail) {
                        Storage::delete("public/".$portfolio->media);
                    $thumbnail = $request->file('thumbnail')->store('images\portfolio','public');
                    $portfolio->media = $thumbnail;
                }
            }
            $portfolio->nama = $request->nama;
            $portfolio->tahun = $request->tahun;
            $portfolio->jenis = $request->jenis;
            $portfolio->deskripsi = $request->deskripsi;
            $portfolio->link = $request->link;
            $portfolio = $portfolio->save();
            return redirect()->back()->with('success', "Data update successfully");
            }
    }
    public function store_port(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'tahun' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', "Unable to create data, please check your form");
        }
        else{

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail')->store('images\portfolio','public');
            } else {
                $thumbnail = NULL;
            }

            Portfolio::create([
                'nama' => $request->nama,
                'tahun' => $request->tahun,
                'jenis' => $request->jenis,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'media' => $thumbnail,
                'created_at' => Carbon::now()
            ]);
            return redirect()->back()->with('success', "Data successfully created");
        }
    }
    public function store_article(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', "Unable to create data, please check your form");
        }
        else{


        if($request->category_id != null ){
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail')->store('images\article','public');
            } else {
                $thumbnail = NULL;
            }

            $article = Article::create([
                'user_id' => '1',
                'judul' => $request->title,
                'media' => $thumbnail,
                'isi' => $request->content,
                'meta_desc' => $request->meta_desc,
                'slug' => $request->slug,
                'status' => $request->status,
                'created_at' => Carbon::now(),
            ]);

            $article->Category()->attach($request->category_id);

            return redirect()->back()->with('success', "Data successfully created");
        }else{
            return redirect()->back()->with('error', "Unable to create data, please check your form");
        }


        }
    }
    public function update_article($id, Request $request)
    {

        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->with('error', "Unable to update data, please check your form");
        }
        else{

        if($request->category_id != null ){
            $article = Article::find($id);
            $article->Category()->sync($request->category_id);
            if ($request->hasFile('thumbnail')) {
                if ($request->thumbnail != $article->thumbnail) {
                        Storage::delete("public/".$article->media);
                    $thumbnail = $request->file('thumbnail')->store('images\article','public');
                    $article->media = $thumbnail;
                }
            }

            $article->judul = $request->title;
            $article->isi = $request->content;
            $article->meta_desc = $request->meta_desc;
            $article->slug = $request->slug;
            $article->status = $request->status;
            $article = $article->save();



            return redirect()->back()->with('success', "Data update successfully");
        }else{
            return redirect()->back()->with('error', "Unable to update data, please check your form");
        }


        }
    }
    public function delete_port(Request $request)
    {
        $portfolio = Portfolio::find($request->id);

        if ($portfolio->media != '') {
            Storage::delete("public/".$portfolio->media);


        }

        $portfolio = $portfolio->delete();


        if ($portfolio) {
            return response()->json(['info' => 'success', 'msg' => 'Portfolio successfully deleted']);
        } else {
            return response()->json(['info' => 'error', 'msg' => 'Error on Delete the Portfolio']);
        }
    }
    public function delete_article(Request $request)
    {
        $article = Article::find($request->id);

        if ($article->media != '') {
            Storage::delete("public/".$article->media);
        }

        $article = $article->delete();

        if ($article) {
            return response()->json(['info' => 'success', 'msg' => 'Article successfully deleted']);
        } else {
            return response()->json(['info' => 'error', 'msg' => 'Error on Delete the Article']);
        }
    }
}
