<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Mail\SendMailable;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contact(){
      return view('Contact-Us');
    }

    public function about(){
      return view('About-Us');
    }

     public function whyUs(){
      return view('why-us');
    }

     public function company(){
      return view('Company-history');
    }

    public function computerSytem(){
      return view('computer-Sytem-installation');
    }

     public function securitySurvillance(){
      return view('Security-Surveillance-Systems');
    }

     public function networkInstallation(){
      return view('Network-installation');
    }

     public function computerAccessories(){
      return view('Computer-accessories-supplies');
    }

     public function generalOffice(){
      return view('General-Office-Supplies');
    }

     public function support(){
      return view('Support-Consultancy');
    }

     public function portfolio(){
      return view('Our-Portfolio');
    }

     public function blog(){
      return view('Our-Blogs');
    }

     public function faq(){
      return view('Our-Faq');
    }

     public function careers(){
      return view('Careers');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'phone' =>  'required',
      'subject' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('info@trianchor.co.ke')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

    


