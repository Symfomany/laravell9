<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use Mail;


/**
 *
 */
class Pagescontroller extends Controller
{

  /**
   * Contact us
   */
  public function contact(Request $request)
  {


      return view('contact');
  }


  /**
   * Contact us
   */
  public function sendMail(ContactForm $request)
  {
    Mail::send('emails/welcome', ['user' => "test juju"], function ($m) {
           $m->from('hello@app.com', 'Your Application');
           $m->to("julien@meetserious.com", "Boyer")->subject('Hello Bitch!');
       });

       return redirect('/')->with('success', 'Email Envoyé!');

  }
}








 ?>
