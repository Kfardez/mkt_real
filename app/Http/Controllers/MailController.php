<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
public function controleEmail()
    //afficher la page contact
    {
        return view('pages.contact');
    }

public function envoyerEmail(Request $request)
    {
$request->validate([
        'email' => 'required|email',
        'subject' => 'required',
        'name' => 'required',
        'content' => 'required'
        ]);

        $data=[
            'subject' => $request->subject,
            'name' => $request ->name,
            'email'=> $request ->email,
            'content' => $request ->content
        ];

        Mail::send('pages.send_template', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
          });

          return back()->with(['message' => 'Email successfully sent!']);
      }

}
