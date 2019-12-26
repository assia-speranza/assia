<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VolsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // for ($i=1; $i < 5; $i++) { 
    //   DB::table('Vols')->insert([
    //         'num_vol' =>'FA001',
    //         'date_depart' => '2020-12-15',
    //        'heure_depart'=> '22:00:00',
    //         'date_arriver' => '2020-12-16',
    //       'heure_arriver'=>  '01:00:00',
    //         'duree_vol' => '03:00',
    //         'num_ville_depart'=>51,
    //         'num_ville_arriver'=>1,
    //          'ville_depart'=> 'Alger', 
    //          'ville_arriver' => 'Paris',

    //         'nombre_place_restante' => 50,

    //         'prix_vol' => '30000',
    //         "id_avion" => 1,
    //         "code_aeroport_depart" => "ALG",
    //         "nom_aeroport_depart"=>"HOUARI BOUMEDIENE",
    //         "code_aeroport_arriver" => "CDG",
    //         "nom_aeroport_arriver"=>"AÉROPORT DE PARIS-CHARLES-DE-GAULLE",

    //         // "created_at" => Carbon::now(),
    //         // "updated_at" => Carbon::now(),
    //         "num_terminal_depart"=>2,
    //         "num_terminal_arriver"=>3,
    //         "heure_embarquement"=>'07:30:00',
    //         "porte_embarquement"=>"p0",
    //         "prix_bagage_sup"=>200,



    //      ]);   
    // //     }
    // for ($i=2; $i <= 3; $i++) { 
    //     DB::table('Vols')->insert([
    //         'num_vol' =>'FA'.$i.$i.$i,
    //         'date_depart' => '2020-11-30',
    //        'heure_depart'=> '08:00:00',
    //         'date_arriver' => '2020-11-30',
    //       'heure_arriver'=>  '10:00:00',
    //         'duree_vol' => '02:00',
    //         'ville_depart'=> 'Paris', 
    //          'ville_arriver' => 'Alger',
    //         'num_ville_depart'=>1,
    //         'num_ville_arriver'=>51,
    //         'nombre_place_restante' => 50,
    //         'prix_vol' => '30000',
    //         "id_avion" =>$i,
    //         "code_aeroport_depart" => "CDG",
    //         "nom_aeroport_depart"=>"AÉROPORT DE PARIS-CHARLES-DE-GAULLE",
    //         "code_aeroport_arriver" => "ALG",
    //         "nom_aeroport_arriver"=>"HOUARI BOUMEDIENE",
    //         "num_terminal_depart"=>2,
    //         "num_terminal_arriver"=>3,
    //         "heure_embarquement"=>'07:30:00',
    //         "porte_embarquement"=>"p".$i,
    //         "prix_bagage_sup"=>200,                
    //         // "created_at" => Carbon::now(),
    //         // "updated_at" => Carbon::now(),



    //         ]);   
    //     }
    //seeder les vols Assia Europe *********************************
    //Alger -Paris:
    //CDG aller 1
    for ($month = 1; $month < 7; $month++) {
      for ($day = 1; $day < 32; $day++) {

        if (($day == 28 & $month == 2) | ($month % 2 == 0 & $day == 30) | $day == 31) {
          $next_day = 1;
          $next_month = $month + 1;
        } else {
          $next_day = $day + 1;
          $next_month = $month;
        }

        if (($month == 1 & $day > 14) | ($month == 2 & $day < 29) | ($month > 2 & $month < 6 & $day < 31) | ($month != 2 & $day == 31 & $month % 2 != 0) | ($month == 6 & $day < 16)) {
          DB::table('Vols')->insert([
            'num_vol' => 'FA001',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 1,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '11:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA002',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '19:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 1,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '16:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG   Aller 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA003',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 2,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA004',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 2,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);

          //aller3 

          DB::table('Vols')->insert([
            'num_vol' => 'FA005',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 3,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA006',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,

            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 3,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //aller4

          DB::table('Vols')->insert([
            'num_vol' => 'FA007',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '08:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 4,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 4
          DB::table('Vols')->insert([
            'num_vol' => 'FA008',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:40:00',
            'duree_vol' => '02:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Paris',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 4,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:40:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);

          //aller5

          DB::table('Vols')->insert([
            'num_vol' => 'FA009',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '23:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '01:20:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 5,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "CDG",
            "nom_aeroport_arriver" => "Aéroport de Paris-Charles-de-Gaulle",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '22:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 5
          DB::table('Vols')->insert([
            'num_vol' => 'FA010',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '04:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '06:40:00',
            'duree_vol' => '02:20:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 5,
            "code_aeroport_depart" => "CDG",
            "nom_aeroport_depart" => "Aéroport de Paris-Charles-de-Gaulle",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //fin Gdggggggggggggggggggggggggg 010

          //Orlyyy 2h:30 avion 6-7-8-9 p4 p5 

          DB::table('Vols')->insert([
            'num_vol' => 'FA011',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 6,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '08:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //orly retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA012',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:50:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 6,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly ",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène ",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //orly  Aller 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA013',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:10:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            //  // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 7,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:40:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2        
          DB::table('Vols')->insert([
            'num_vol' => 'FA014',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 7,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:40:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);

          //aller3 

          DB::table('Vols')->insert([
            'num_vol' => 'FA015',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 8,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA016',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '03:00:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Paris',
            'ville_arriver' => 'Alger',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 8,

            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",
            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '00:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //aller4

          DB::table('Vols')->insert([
            'num_vol' => 'FA017',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:30:00',
            'duree_vol' => '02:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Paris',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 1,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 9,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "ORY",
            "nom_aeroport_arriver" => "Aéroport de Paris-Orly",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '22:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          //CDG retour 4
          DB::table('Vols')->insert([
            'num_vol' => 'FA018',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '01:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '04:00:00',
            'duree_vol' => '02:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Paris',
            'num_ville_depart' => 1,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19100',
            "id_avion" => 9,
            "code_aeroport_depart" => "ORY",
            "nom_aeroport_depart" => "Aéroport de Paris-Orly",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '01:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
        }
      }
    }


    for ($month = 1; $month < 7; $month++) {
      for ($day = 1; $day < 32; $day++) {

        if (($day == 28 & $month == 2) | ($month % 2 == 0 & $day == 30) | $day == 31) {
          $next_day = 1;
          $next_month = $month + 1;
        } else {
          $next_day = $day + 1;
          $next_month = $month;
        }

        if (($month == 1 & $day > 14) | ($month == 2 & $day < 29) | ($month > 2 & $month < 6 & $day < 31) | ($month != 2 & $day == 31 & $month % 2 != 0) | ($month == 6 & $day < 16)) {









          //paris lYON  2 VOL CHAQUE JOUR P5 P6 AVIONS 10**FA019***1h 50****************************************************
          //aLLER 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA019',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:50:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Lyon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 2,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 10,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LYS",
            "nom_aeroport_arriver" => "Aéroport de Lyon-Saint-Exupéry ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA020',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:50:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Lyon',
            'num_ville_depart' => 2,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 10,
            "code_aeroport_depart" => "LYS",
            "nom_aeroport_depart" => "Aéroport de Lyon-Saint-Exupéry ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p6",
            "prix_bagage_sup" => 1000,
          ]);

          //aLLER 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA021',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Lyon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 2,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 11,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LYS",
            "nom_aeroport_arriver" => "Aéroport de Lyon-Saint-Exupéry ",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:00:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA022',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '02:10:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Lyon',
            'num_ville_depart' => 2,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '16200',
            "id_avion" => 11,
            "code_aeroport_depart" => "LYS",
            "nom_aeroport_depart" => "Aéroport de Lyon-Saint-Exupéry ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '23:50:00',
            "porte_embarquement" => "p6",
            "prix_bagage_sup" => 1000,
          ]);

          //Paris marseille avion 12 FA023 **********1h30******p7 p8****** 12 AVIONS  Aéroport de Marseille Provence MRS 14320dz
          //aLLER 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA023',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '09:30:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 12,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA024',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:00:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 12,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller 2 fa025
          DB::table('Vols')->insert([
            'num_vol' => 'FA025',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:50:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 13,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA026',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '21:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '23:00:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 13,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller 3 fa027
          DB::table('Vols')->insert([
            'num_vol' => 'FA027',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:00:00',
            'duree_vol' => '01:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Marseille',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 3,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 14,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MRS",
            "nom_aeroport_arriver" => "Aéroport de Marseille Provence",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '20:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 3
          DB::table('Vols')->insert([
            'num_vol' => 'FA028',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '03:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '04:30:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Marseille',
            'num_ville_depart' => 3,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '14320',
            "id_avion" => 14,
            "code_aeroport_depart" => "MRS",
            "nom_aeroport_depart" => "Aéroport de Marseille Provence ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '03:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //Toulouseeee   ****fa029 *****avion 15 ****prix = 15400 dz p9 p10****1h 40

          DB::table('Vols')->insert([
            'num_vol' => 'FA029',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:10:00',
            'duree_vol' => '01:40:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Toulouse',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 4,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '15400',
            "id_avion" => 15,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "TLS",
            "nom_aeroport_arriver" => "Aéroport de Toulouse-Blagnac",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '09:00:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA030',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:40:00',
            'duree_vol' => '01:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Toulouse',
            'num_ville_depart' => 4,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '15400',
            "id_avion" => 15,
            "code_aeroport_depart" => "TLS",
            "nom_aeroport_depart" => "Aéroport de Toulouse-Blagnac ",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:40:00',
            "porte_embarquement" => "p10",
            "prix_bagage_sup" => 1000,
          ]);

          //Nice fa031 *****avion 16  prix  17400 Aéroport de Nice-Côte d'Azur NCE fa031***1h 40 p1 p2
          DB::table('Vols')->insert([
            'num_vol' => 'FA031',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '12:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '14:10:00',
            'duree_vol' => '01:40:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Nice',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 4,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17400',
            "id_avion" => 16,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "NCE",
            "nom_aeroport_arriver" => "Aéroport de Nice-Côte d'Azur NCE",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:00:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA032',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:10:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:50:00',
            'duree_vol' => '01:40:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Nice',
            'num_ville_depart' => 4,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17400',
            "id_avion" => 15,
            "code_aeroport_depart" => "NCE",
            "nom_aeroport_depart" => "Aéroport de Nice-Côte d'Azur",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '16:40:00',
            "porte_embarquement" => "p2",
            "prix_bagage_sup" => 1000,
          ]);

          // Bordeaux ******p2 p3 avion 16 fa033 prix 17000 Aéroport de Bordeaux-Mérignac BOD 1h50

          DB::table('Vols')->insert([
            'num_vol' => 'FA033',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:50:00',
            'duree_vol' => '01:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Bordeaux',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 6,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17000',
            "id_avion" => 16,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BOD",
            "nom_aeroport_arriver" => "Aéroport de Bordeaux-Mérignac",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA034',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:50:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:40:00',
            'duree_vol' => '01:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Bordeaux',
            'num_ville_depart' => 6,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '17000',
            "id_avion" => 16,
            "code_aeroport_depart" => "BOD",
            "nom_aeroport_depart" => "Aéroport de Bordeaux-Mérignac",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '20:20:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          //  //Allemagne
          //Francfort: Aéroport de Francfort-sur-le-Main FRA avion 17 prix 21500 fa035 3h:00 


          DB::table('Vols')->insert([
            'num_vol' => 'FA035',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:30:00',
            'duree_vol' => '03:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Francfort',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 7,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 17,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FRA",
            "nom_aeroport_arriver" => "Aéroport de Francfort-sur-le-Main",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '13:00:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA036',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:30:00',
            'duree_vol' => '03:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Francfort',
            'num_ville_depart' => 7,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 17,
            "code_aeroport_depart" => "FRA",
            "nom_aeroport_depart" => "Aéroport de Francfort-sur-le-Main",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:00:00',
            "porte_embarquement" => "p2",
            "prix_bagage_sup" => 1000,
          ]);
          //aller 2 avion18
          DB::table('Vols')->insert([
            'num_vol' => 'FA037',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '18:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '03:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Francfort',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 7,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 18,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FRA",
            "nom_aeroport_arriver" => "Aéroport de Francfort-sur-le-Main",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '17:50:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA038',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '03:00:00',
            'duree_vol' => '03:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Francfort',
            'num_ville_depart' => 7,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21500',
            "id_avion" => 18,
            "code_aeroport_depart" => "FRA",
            "nom_aeroport_depart" => "Aéroport de Francfort-sur-le-Main",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '23:30:00',
            "porte_embarquement" => "p3",
            "prix_bagage_sup" => 1000,
          ]);
          //////////////////////////////////////////////////////////////////////////////////
          // Berlin 
          //Aéroport de Berlin-Schönefeld SXF prix 33000  duree   avion 19 p1 p5  fa039 3vols p7 p9 5h 20mnt
          //aller1
          DB::table('Vols')->insert([
            'num_vol' => 'FA039',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "20210-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '11:20:00',
            'duree_vol' => '05:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000 ',
            "id_avion" => 19,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '05:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA040',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '13:20:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:40:00',
            'duree_vol' => '05:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 19,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '12:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //aller2
          DB::table('Vols')->insert([
            'num_vol' => 'FA041',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:00:00',
            'duree_vol' => '06:15:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 20,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '10:15:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA042',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '02:15:00',
            'duree_vol' => '06:15:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 20,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '19:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          //******
          //aller3 
          DB::table('Vols')->insert([
            'num_vol' => 'FA043',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:05:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '22:25:00',
            'duree_vol' => '07:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Berlin',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 8,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 21,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "SXF",
            "nom_aeroport_arriver" => "Aéroport de Berlin-Schönefeld",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 3 *7 h 20  avec escale franchaaa 
          DB::table('Vols')->insert([
            'num_vol' => 'FA044',
            'date_depart' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '00:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '07:40:00',
            'duree_vol' => '07:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Berlin',
            'num_ville_depart' => 8,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '33000',
            "id_avion" => 21,
            "code_aeroport_depart" => "SXF",
            "nom_aeroport_depart" => "Aéroport de Berlin-Schönefeld",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '22:50:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);

          /////ITALI:**************speranzaaa 
          //ROME:Aéroport Léonard-de-Vinci FCO prix24500  avion 22  fa045 2 fois par jour aller1  2:00
          DB::table('Vols')->insert([
            'num_vol' => 'FA045',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '09:00:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Rome',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 9,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 22,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FCO",
            "nom_aeroport_arriver" => "Aéroport Léonard-de-Vinci",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 3,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA046',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '13:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Rome',
            'num_ville_depart' => 9,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 22,
            "code_aeroport_depart" => "FCO",
            "nom_aeroport_depart" => "Aéroport Léonard-de-Vinci",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);

          // aller retur 2 fa047

          DB::table('Vols')->insert([
            'num_vol' => 'FA047',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '14:45:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Rome',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 9,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 23,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "FCO",
            "nom_aeroport_arriver" => "Aéroport Léonard-de-Vinci",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:15:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA048',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '18:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Rome',
            'num_ville_depart' => 9,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24500',
            "id_avion" => 23,
            "code_aeroport_depart" => "FCO",
            "nom_aeroport_depart" => "Aéroport Léonard-de-Vinci",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:30:00',
            "porte_embarquement" => "p4",
            "prix_bagage_sup" => 1000,
          ]);
          // Milaaaaann fa048 avion 24 aerop   prix 24800 1 vol  2h :00 direct 

          // aller retur 2 fa049

          DB::table('Vols')->insert([
            'num_vol' => 'FA049',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '08:00:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Milan',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 10,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24800',
            "id_avion" => 24,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MXP",
            "nom_aeroport_arriver" => "Aéroport de Milan Malpensa",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '05:30:00',
            "porte_embarquement" => "p5",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA050',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '12:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Milan',
            'num_ville_depart' => 10,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '24800',
            "id_avion" => 24,
            "code_aeroport_depart" => "MXP",
            "nom_aeroport_depart" => "Aéroport de Milan Malpensa",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          // Venise fa051 avion 25 prix  21000 aropAéroport de Venise-Marco-Polo VCE 11 2 vols  avec escallees
          //aller retour 1 
          DB::table('Vols')->insert([
            'num_vol' => 'FA051',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '06:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '11:50:00',
            'duree_vol' => '05:50:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Venise',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 11,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 25,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "VCE",
            "nom_aeroport_arriver" => "Aéroport de Venise-Marco-Polo",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '05:50:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA052',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '19:50:00',
            'duree_vol' => '05:50:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Venise',
            'num_ville_depart' => 11,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 25,
            "code_aeroport_depart" => "VCE",
            "nom_aeroport_depart" => "Aéroport de Venise-Marco-Polo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA053',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '10:45:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:15:00',
            'duree_vol' => '06:30:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Venise',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 11,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 26,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "VCE",
            "nom_aeroport_arriver" => "Aéroport de Venise-Marco-Polo",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '09:15:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA054',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '19:00:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '01:30:00',
            'duree_vol' => '06:30:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Venise',
            'num_ville_depart' => 11,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '21000',
            "id_avion" => 26,
            "code_aeroport_depart" => "VCE",
            "nom_aeroport_depart" => "Aéroport de Venise-Marco-Polo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '18:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          //Espagne Madrid avion27  fa055  prix19800  aerop Aéroport Adolfo Suárez Madrid-Barajas MAD 12 2 vols  vols direct 1h 45minutes
          //aller retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA055',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '08:45:00',
            'duree_vol' => '01:45:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Madrid',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 12,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAD",
            "nom_aeroport_arriver" => " Aéroport Adolfo Suárez Madrid-Barajas",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          // retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA056',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '15:45:00',
            'duree_vol' => '01:45:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Madrid',
            'num_ville_depart' => 12,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "MAD
  ",
            "nom_aeroport_depart" => "Aéroport Adolfo Suárez Madrid-Barajas",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '13:30:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);
          //aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA057',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '12:45:00',
            'duree_vol' => '01:45:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Madrid',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 12,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAD",
            "nom_aeroport_arriver" => " Aéroport Adolfo Suárez Madrid-Barajas",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '10:30:00',
            "porte_embarquement" => "p9",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA058',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:45:00',
            'duree_vol' => '01:45:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Madrid',
            'num_ville_depart' => 12,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19800',
            "id_avion" => 27,
            "code_aeroport_depart" => "MAD
  ",
            "nom_aeroport_depart" => "Aéroport Adolfo Suárez Madrid-Barajas",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '16:15:00',
            "porte_embarquement" => "p8",
            "prix_bagage_sup" => 1000,
          ]);

          // Barcelon Aéroport Josep Tarradellas Barcelone-El Prat  BCN 13  prix 19000   fa059  avion 28 2 vols   1h 20minutes direct 

          //aller retour 1
          DB::table('Vols')->insert([
            'num_vol' => 'FA059',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '09:20:00',
            'duree_vol' => '01:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Barcelon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 13,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 28,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BCN",
            "nom_aeroport_arriver" => "Aéroport Josep Tarradellas Barcelone-El Prat",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '07:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          DB::table('Vols')->insert([
            'num_vol' => 'FA060',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:50:00',
            'duree_vol' => '01:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Barcelon',
            'num_ville_depart' => 13,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 28,
            "code_aeroport_depart" => "BCN",
            "nom_aeroport_depart" => "Aéroport Josep Tarradellas Barcelone-El Prat",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);

          ///aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA061',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '11:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '13:00:00',
            'duree_vol' => '01:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Barcelon',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 13,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 29,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "BCN",
            "nom_aeroport_arriver" => "Aéroport Josep Tarradellas Barcelone-El Prat",
            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '11:10:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA062',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '16:20:00',
            'duree_vol' => '01:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Barcelon',
            'num_ville_depart' => 13,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19000',
            "id_avion" => 29,
            "code_aeroport_depart" => "BCN",
            "nom_aeroport_depart" => "Aéroport Josep Tarradellas Barcelone-El Prat",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 1,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //------------
          //Russie 
          //Moscou: aerop  Aéroport de Moscou-Domodédovo DME 14  fa063 avion30  prix 26300 1 vol directttt

          ///aller retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA063',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '09:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '16:10:00',
            'duree_vol' => '07:10:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Moscou',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 14,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '26300',
            "id_avion" => 30,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "DME",
            "nom_aeroport_arriver" => "Aéroport de Moscou-Domodédovo",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '08:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA064',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '17:20:00',
            'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '00:30:00',
            'duree_vol' => '07:10:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Moscou',
            'num_ville_depart' => 14,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '26300',
            "id_avion" => 30,
            "code_aeroport_depart" => "DME",
            "nom_aeroport_depart" => "Aéroport de Moscou-Domodédovo",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '23:10:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);

          //------------
          //Royaume-Uni
          //	Londres  Aéroport de Londres Heathrow LHR  15 fa065  av 31 prix  19500 1  vol 3h 10 sans escale 

          DB::table('Vols')->insert([
            'num_vol' => 'FA065',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '07:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '10:10:00',
            'duree_vol' => '03:10:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Londres',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 15,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19500',
            "id_avion" => 31,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "LHR",
            "nom_aeroport_arriver" => "Aéroport de Londres Heathrow",
            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '06:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA066',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '14:30:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '17:40:00',
            'duree_vol' => '03:10:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Moscou',
            'num_ville_depart' => 15,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '19500',
            "id_avion" => 31,
            "code_aeroport_depart" => "LHR",
            "nom_aeroport_depart" => "Aéroport de Londres Heathrow",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:00:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //Manchester Aéroport de Manchester MAN 16 AV 1 fa067 prix 20800
          DB::table('Vols')->insert([
            'num_vol' => 'FA067',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '08:40:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '14:00:00',
            'duree_vol' => '05:20:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Manchester',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 16,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20800',
            "id_avion" => 1,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "MAN",
            "nom_aeroport_arriver" => "Aéroport de Manchester",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '08:10:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA068',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '16:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '21:20:00',
            'duree_vol' => '05:20:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => 'Manchester',
            'num_ville_depart' => 16,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20800',
            "id_avion" => 1,
            "code_aeroport_depart" => "MAN",
            "nom_aeroport_depart" => "Aéroport de Manchester",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '15:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
          //------------------
          //SUISSE
          //Genève aerop Aéroport international de Genève GVA 17     prix 20000   fa069    av 2 1vol 2h:00

          DB::table('Vols')->insert([
            'num_vol' => 'FA069',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '15:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' => '17:30:00',
            'duree_vol' => '02:00:00',
            'ville_depart' => 'Alger',
            'ville_arriver' => 'Genève',
            'num_ville_depart' => 51,
            'num_ville_arriver' => 17,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20000',
            "id_avion" => 2,
            "code_aeroport_depart" => "ALG",
            "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
            "code_aeroport_arriver" => "GVA",
            "nom_aeroport_arriver" => "Aéroport international de Genève",
            "num_terminal_depart" => 3,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '14:30:00',
            "porte_embarquement" => "p1",
            "prix_bagage_sup" => 1000,
          ]);
          //retour 2
          DB::table('Vols')->insert([
            'num_vol' => 'FA070',
            'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_depart' => '20:00:00',
            'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
            'heure_arriver' =>  '22:00:00',
            'duree_vol' => '02:00:00',
            'ville_arriver' => 'Alger',
            'ville_depart' => ' Genève',
            'num_ville_depart' => 17,
            'num_ville_arriver' => 51,
            // 'nombre_place_restante' => 00,
            'prix_vol' => '20000',
            "id_avion" => 2,
            "code_aeroport_depart" => "GVA",
            "nom_aeroport_depart" => "Aéroport international de Genève",

            "code_aeroport_arriver" => "ALG",
            "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

            "num_terminal_depart" => 2,
            "num_terminal_arriver" => 2,
            "heure_embarquement" => '19:30:00',
            "porte_embarquement" => "p7",
            "prix_bagage_sup" => 1000,
          ]);
 //------
        //grèce
        //Athènes aerop Aéroport international d'Athènes Elefthérios-Venizélos ATH 18      avion3    prix  21000     1 vol   FA071

        DB::table('Vols')->insert([
          'num_vol' => 'FA071',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '07:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '14:50:00',
          'duree_vol' => '06:50:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Athènes ',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 18,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '21000',
          "id_avion" => 3,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "ATH",
          "nom_aeroport_arriver" => "Aéroport international d'Athènes Elefthérios-Venizélos ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '06:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA072',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '16:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '20:50:00',
          'duree_vol' => '06:50:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Athènes ',
          'num_ville_depart' => 18,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '21000',
          "id_avion" => 3,
          "code_aeroport_depart" => "ATH",
          "nom_aeroport_depart" => "Aéroport international d'Athènes Elefthérios-Venizélos",

          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '15:30:00',
          "porte_embarquement" => "p12",
          "prix_bagage_sup" => 1000,
        ]);

       //------------
        //Turquie
        //	Istanbul   av  4   fa073      Aéroport Atatürk d'Istanbul  ISL19  prix 38800  2 vols 03h15m
         
        DB::table('Vols')->insert([
          'num_vol' => 'FA073',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '08:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '11:15:00',
          'duree_vol' => '03:15:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Istanbul',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 19,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '38800',
          "id_avion" => 4,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "ISL",
          "nom_aeroport_arriver" => "Aéroport Atatürk d'Istanbul ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '07:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 1
        DB::table('Vols')->insert([
          'num_vol' => 'FA074',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '13:15:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '16:30:00',
          'duree_vol' => '03:15:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Istanbul',
          'num_ville_depart' => 19,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '38800',
          "id_avion" => 4,
          "code_aeroport_depart" => "ISL",
          "nom_aeroport_depart" => "Aéroport Atatürk d'Istanbul ",

          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '14:45:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);

       //alller retour 2 
       DB::table('Vols')->insert([
        'num_vol' => 'FA075',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '12:15:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '15:30:00',
        'duree_vol' => '03:15:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Istanbul',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 19,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '38800',
        "id_avion" => 5,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "ISL",
        "nom_aeroport_arriver" => "Aéroport Atatürk d'Istanbul ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '11:45:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA076',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '17:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '20:45:00',
        'duree_vol' => '03:15:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Istanbul',
        'num_ville_depart' => 19,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '38800',
        "id_avion" => 5,
        "code_aeroport_depart" => "ISL",
        "nom_aeroport_depart" => "Aéroport Atatürk d'Istanbul ",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '17:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);
//----------
        // Portugal
        //Lisbonne    aerop "Aéroport Humberto Delgado de Lisbonne" LIS20   av6   prix  13000  fa077    2 vol
      
         //alller retour 1
       DB::table('Vols')->insert([
        'num_vol' => 'FA077',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '15:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '16:35:00',
        'duree_vol' => '02:05:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Lisbonne',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 20,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "LIS",
        "nom_aeroport_arriver" => "Aéroport Humberto Delgado de Lisbonne ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '15:00:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA078',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '18:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '20:35:00',
        'duree_vol' => '02:05:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Lisbonne',
        'num_ville_depart' => 20,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "LIS",
        "nom_aeroport_depart" => "Aéroport Humberto Delgado de Lisbonne",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '18:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);
      //aller retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA079',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '09:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '11:35:00',
        'duree_vol' => '02:05:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Lisbonne',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 20,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "LIS",
        "nom_aeroport_arriver" => "Aéroport Humberto Delgado de Lisbonne ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '09:00:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA080',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '13:30:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '16:35:00',
        'duree_vol' => '02:05:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Lisbonne',
        'num_ville_depart' => 20,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '13000',
        "id_avion" => 6,
        "code_aeroport_depart" => "LIS",
        "nom_aeroport_depart" => "Aéroport Humberto Delgado de Lisbonne",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '13:00:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);
//  //--------
        //Pays-Bas
        //	Amsterdam   Aéroport d'Amsterdam-Schiphol  AMS 21  PRIX18000     FA081   vol1  avion 7 avec l escale  5h 00

         //aller retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA081',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '06:00:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' => '11:00:00',
        'duree_vol' => '05:00:00',
        'ville_depart' => 'Alger',
        'ville_arriver' => 'Amsterdam ',
        'num_ville_depart' => 51,
        'num_ville_arriver' => 21,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '18000',
        "id_avion" => 7,
        "code_aeroport_depart" => "ALG",
        "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
        "code_aeroport_arriver" => "AMS",
        "nom_aeroport_arriver" => "Aéroport d'Amsterdam-Schiphol ",
        "num_terminal_depart" => 1,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '05:30:00',
        "porte_embarquement" => "p1",
        "prix_bagage_sup" => 1000,
      ]);
      //retour 2
      DB::table('Vols')->insert([
        'num_vol' => 'FA082',
        'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_depart' => '13:00:00',
        'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
        'heure_arriver' =>  '18:00:00',
        'duree_vol' => '05:00:00',
        'ville_arriver' => 'Alger',
        'ville_depart' => 'Amsterdam',
        'num_ville_depart' => 21,
        'num_ville_arriver' => 51,
        // 'nombre_place_restante' => 00,
        'prix_vol' => '18000',
        "id_avion" => 7,
        "code_aeroport_depart" => "AMS",
        "nom_aeroport_depart" => "Aéroport d'Amsterdam-Schiphol",

        "code_aeroport_arriver" => "ALG",
        "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",

        "num_terminal_depart" => 2,
        "num_terminal_arriver" => 2,
        "heure_embarquement" => '14:30:00',
        "porte_embarquement" => "p5",
        "prix_bagage_sup" => 1000,
      ]);

  //------------
        // Belgique  Bruxelles,    FA083    prix  30000     aerop Aéroport de Bruxelles-National BRU  22 av8   1 vol 3h:00

        DB::table('Vols')->insert([
          'num_vol' => 'FA083',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '18:35:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '21:35:00',
          'duree_vol' => '03:00:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Bruxelles',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 22,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '30000',
          "id_avion" => 8,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "BRU",
          "nom_aeroport_arriver" => "Aéroport de Bruxelles-National ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '18:00:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA084',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '23:00:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '02:00:00',
          'duree_vol' => '03:00:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Bruxelles',
          'num_ville_depart' => 22,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '30000',
          "id_avion" => 8,
          "code_aeroport_depart" => "BRU",
          "nom_aeroport_depart" => " Aéroport de Bruxelles-National",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 2,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
  //--
        //Autriche Vienne    aero Aéroport de Vienne-Schwechat VIE 23  av9    FA085    prix 31000   vol1  avec escalllless
        DB::table('Vols')->insert([
          'num_vol' => 'FA085',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '10:45:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '17:40:00',
          'duree_vol' => '06:55:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Vienne',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 23,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '31000',
          "id_avion" => 9,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "VIE",
          "nom_aeroport_arriver" => "Aéroport de Vienne-Schwechat  ",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '10:15:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA086',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '19:45:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' =>  '02:40:00',
          'duree_vol' => '06:55:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Vienne',
          'num_ville_depart' => 23,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '31000',
          "id_avion" => 9,
          "code_aeroport_depart" => "VIE",
          "nom_aeroport_depart" => "Aéroport de Vienne-Schwechat ",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '19:15:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
//

//-------
        // Hongrie Budapest   aerop Aéroport international de Budapest-Ferenc Liszt BUD  24 prix  av10    FA087   PRIX  37000  1VOL    avec escale 

        DB::table('Vols')->insert([
          'num_vol' => 'FA087',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '06:00:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '15:30:00',
          'duree_vol' => '09:30:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Budapest',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 24,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '37000',
          "id_avion" =>10,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "BUD",
          "nom_aeroport_arriver" => "Aéroport international de Budapest-Ferenc Liszt",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '05:30:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA088',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '17:00:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '02:30:00',
          'duree_vol' => '09:30:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Budapest',
          'num_ville_depart' => 24,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '37000',
          "id_avion" => 10,
          "code_aeroport_depart" => "BUD",
          "nom_aeroport_depart" => "Aéroport international de Budapest-Ferenc Liszt",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '18:30:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);
  //--------
        //Denmark 	Copenhague   Aéroport de Copenhague CPH 25 av 11 FA089 PRIX 23000 1 VOL avec escallleeee onblig

        DB::table('Vols')->insert([
          'num_vol' => 'FA089',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '12:10:00',
          'date_arriver' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '19:35:00',
          'duree_vol' => '07:25:00',
          'ville_depart' => 'Alger',
          'ville_arriver' => 'Copenhague',
          'num_ville_depart' => 51,
          'num_ville_arriver' => 25,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '23000',
          "id_avion" =>11,
          "code_aeroport_depart" => "ALG",
          "nom_aeroport_depart" => "Aéroport d’Alger-Houari-Boumédiène",
          "code_aeroport_arriver" => "CPH",
          "nom_aeroport_arriver" => "Aéroport de Copenhague",
          "num_terminal_depart" => 1,
          "num_terminal_arriver" => 2,
          "heure_embarquement" => '11:40:00',
          "porte_embarquement" => "p1",
          "prix_bagage_sup" => 1000,
        ]);
        //retour 2
        DB::table('Vols')->insert([
          'num_vol' => 'FA090',
          'date_depart' => "2020-" . str_pad($month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($day, 2, '0', STR_PAD_LEFT),
          'heure_depart' => '20:10:00',
          'date_arriver' => "2020-" . str_pad($next_month, 2, '0', STR_PAD_LEFT) . "-" . str_pad($next_day, 2, '0', STR_PAD_LEFT),
          'heure_arriver' => '05:35:00',
          'duree_vol' => '07:25:00',
          'ville_arriver' => 'Alger',
          'ville_depart' => 'Copenhague',
          'num_ville_depart' => 25,
          'num_ville_arriver' => 51,
          // 'nombre_place_restante' => 00,
          'prix_vol' => '23000',
          "id_avion" => 11,
          "code_aeroport_depart" => "CPH",
          "nom_aeroport_depart" => "Aéroport de Copenhague",
  
          "code_aeroport_arriver" => "ALG",
          "nom_aeroport_arriver" => "Aéroport d’Alger-Houari-Boumédiène",
  
          "num_terminal_depart" => 3,
          "num_terminal_arriver" => 3,
          "heure_embarquement" => '19:40:00',
          "porte_embarquement" => "p5",
          "prix_bagage_sup" => 1000,
        ]);






















     
  }
}
