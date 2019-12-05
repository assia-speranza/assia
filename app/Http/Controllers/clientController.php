<?php

namespace App\Http\Controllers;
use App\client;

use Illuminate\Http\Request;

class clientController extends Controller
{
  // la fonction nous permet de crer le tableau e d envoyer la vue 
public function list()
{

    $client=client::all();
    // $client = [
    //     'assia',
    //     'rosa',
    //     'vergine'
    // ];
     return view('clients.index',[
         'clients' =>$client
     ]);
    
    
    }
    public function store()
    {
      //pour dire le champs doit etre remplis 
      request()->validate([
        'pseudo'=>'required|min:3',
        'email'=>'required|email'
      ]);
      
      
      $pseudo=  request('pseudo');
      $email=request('email');
      // dd($pseudo);
      $client=new client();
      $client->name=$pseudo;
      $client->email=$email;
      $client->save();
      return back();

     



    } 

}




