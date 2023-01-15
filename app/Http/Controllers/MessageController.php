<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //
    public function message(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        $query = DB::table('utilisateurs')
        ->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,

     ]);
     if($query){
        return redirect('/')->with('success', 'Votre message a été bien envoyé. Merci !');
     }
    }
}
