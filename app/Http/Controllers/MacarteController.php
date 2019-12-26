<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class MacarteController extends Controller
{
    //
     public function Imprimer(int $num_client, string $nom_client, string $prenom_client)
    {$requete = Client::where('num_client', $num_client)->get('date_naissance_client')->first();
    $dateNaissance = $requete->date_naissance_client;
    $billet = session()->get('billet');
    $numbillet=null;
    foreach($billet as $key){
if($key->num_client == $num_client)
$numbillet=$key->num_billet;

    }
    $reservation = session()->get('reservation');
    $vol =session()->get('vol');
        return view('/enregistrement.cartePDF', ['num_client' => $num_client, 'nom_client' => $nom_client, 'prenom_client' => $prenom_client,'dateNaissance'=>$dateNaissance,'num_billet'=>$numbillet,'reservation'=>$reservation,'vol'=>$vol]);
    }
}
