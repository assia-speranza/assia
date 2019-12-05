<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Vol;
use DB;


class RechercheDeVolController extends Controller
{
    public function valider_les_dates_et_les_passagers(Request $date){
         $date->validate([
            'date_depart'=>'required|date|after_or_equal:today',
            'date_retour'=>'required|date|after_or_equal:tomorrow',

            //valider les passagers
            
            'nb_adultes'=>'required|numeric|min:0',
            'nb_jeunes_adultes'=>'required|numeric|min:0',
            'nb_enfants'=>'required|numeric|min:0',
            'nb_bebes'=>'required|numeric|min:0'
           
            ]);
           
    //         }
    // public function rechercher_vols(Request $recherche){
        // $date=DB::table('vols')->where([  
        //     [ 'date_depart','=',request('date_depart')  ],
        //     [ 'date_arriver','=',request('date_retour')  ],
        //     [ 'code_aeroport_depart','=',request('aeroport_depart')  ],
        //     [ 'code_aeroport_arriver','=',request('aeroport_arrive')  ],
            


        // ])->first();
     
      
        $resultat_recherche= Vol::where([
            [ 'date_depart','=',request('date_depart')  ],
                [ 'date_arriver','=',request('date_retour')  ],
                 [ 'code_aeroport_depart','=',request('aeroport_depart')  ],
                 [ 'code_aeroport_arriver','=',request('aeroport_arrive')  ],
        ])->get();
            return view('select',['resultat_recherche'=>$resultat_recherche]);
    }   
        }
        
    // public function valider_les_passagers(Request $nombre){
    //     $nombre->validate([
    //         'nb_adultes'=>'required|numeric|min:0',
    //         'nb_jeunes_adultes'=>'required|numeric|min:0',
    //         'nb_enfants'=>'required|numeric|min:0',
    //         'nb_bebes'=>'required|numeric|min:0'
    //     ]);
    // }   


