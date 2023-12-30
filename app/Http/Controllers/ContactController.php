<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    public function index(){
        return view('index');
    }

    public function contactMe(ContactRequest $request){
  
        $data = $request->validated();
        //dd($data['name']);
        Mail::send(new ContactMail($data));

        return redirect()->back()->with('success',"Votre message a été envoyé avec succès ! Je vous contact dans trois heures !!");
    }
    //upload file
    public function downloadfile($folder,$path){
        $filepath = $folder.'/'.$path;
        //dd($filepath);
        $result = Storage::download($filepath);
        return $result;
    }
}
