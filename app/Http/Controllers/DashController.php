<?php

namespace App\Http\Controllers;

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

    public function create_port()
    {
        return view('admin.dashboard.portfolio.create');
    }
    public function edit_port($id)
    {
        $data = Portfolio::find($id);
        return view('admin.dashboard.portfolio.edit',['data' => $data]);
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
}
