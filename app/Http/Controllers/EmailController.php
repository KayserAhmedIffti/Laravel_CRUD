<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Mail\TestMail;
use App\Mail\TestMail;
use Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('email');
    }
    public function send(Request $request)
    {
      //  $file = $request->file('image'); // this file from input

        
      $imageName = time().'.'.$request->image->extension();  //image name like 1,2,3...adding
     
      $request->image->move(public_path('images'), $imageName); // storing the image specific path

        $data = [
            'nama' => $request->nama,
            'image'=> $imageName // it is the imageName file storing ti image variable
        ];
        $to = 'kayser@skylarksoft.com';
        Mail::to($to)->send(new TestMail($data));
        echo 'Sent email success';
    }
}
