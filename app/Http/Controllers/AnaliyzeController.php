<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;
use App\Models\Products;

class AnaliyzeController extends Controller
{


    public function analyzefun()
    {
        return view("Consult.analyze");
    }
  

    //Email
    public function emailfun(Request $req)
    {

       
        $data = [
            'panel'       => $req->panel,
            'batteries'   => $req->batteries ,
            'area'        => $req->area ,
        ];
        
        $mail = $req->mailinp;

        Mail::send("Email.email",$data,function($message) use ($mail) {
            $message->subject("Solar Consult");
            $message->to($mail);
        });
        return redirect("/");  
    }
}
