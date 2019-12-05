<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Client;
use DB;

class InsertController extends Controller
{

public function inserer_client(){
$client=new Client();
$client->civilite_client=request('civilite_1');
$client->nom_client=request('nom_1');
$client->prenom_client=request('prenom_1');
$client->num_telephone_client=request('telephone_1');
$client->date_naissance_client=request('date_de_naissance_1');
$client->num_passeport_client=request('num_passeport');
$client->code_postal_client=request('code_postal');
$client->nationalite_client=request('nationnalite');
$client->pays_client=request('pays');
$client->num_categorie=request('categorie');

$client->email_client=request('email_1');
$client->save();
dd($client);

 }
 public function valider_form_info_client(request $info){
     $info->valider([
         'prenom_1'=>'required|string|max:30|min:3',
         'nom_1'=>'required|string|max:30|min:3',
         'date_de_naissance_1'=>'required|date|before:today|after_or_equal:1800',
         'telephone_1'=>'required|numeric|min:5|max:20',
         'num_passeport'=>'required|numeric|min:8|max:20',






     ]);

 }
}
