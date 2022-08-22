<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function send_offer_mail(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required'],
            'services' => ['required'],
            'budgets' => ['required'],
            'company' => ['required'],
            'messages' => ['required']
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', "Unable to update data, please check your form");
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'services' => $request->services,
                'budgets' => $request->budgets,
                'company' => $request->company,
                'messages' => $request->messages
            ];
        }

        $send =  Mail::to('admin@diferso-agency.com')
        // ->cc(['barto7773@gmail.com','roynald.okta@gmail.com','adzhanilah@gmail.com'])
       // ->cc(['barto7773@gmail.com'])
        ->send(new OfferMail($data));
    }
}
