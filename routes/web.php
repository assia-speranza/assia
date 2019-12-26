<?php
use App\Http\Controllers\CheckController;
use App\Http\Controllers\Detail_passeportController;

use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Console\MiddlewareMakeCommand;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  use Facade\FlareClient\View;
// use Symfony\Component\Routing\Route;
// use Facade\FlareClient\View;
// use Symfony\Component\HttpKernel\Client;
// use Symfony\Component\Routing\Route;






// });
// Route::get('contact', function () {
//     return view('contact');
//    });


Route::view('/', 'welcome', ['name' => 'Taylor']);
// Route::view('contact','contact');
//  Route::view('clients/assia','clients/assia',['name' => 'James']);

Route::get('/clients','clientController@list');

Route::view('clients/client','clients/client');

// Route::get('/','App/Vol@select');

Route::get('/bar_recherche',function(){
    
    return view('bar_recherche');
    }
);
Route::get('/recherche','RechercheDeVolController@valider_les_dates_et_les_passagers');
Route::get('/reservation1',function(){
  
  return view('reservation1');
  }
);
Route::post('/reservation1','InsertController@inserer_client');


// Route::get('/clients/assia', function () {
//   return view('/clients/assia', ['name' => 'James']);
// });


//recuperer un tableau passer  un tableau mais il vaut mieux creer un controlleur 

// Route::view('/client','client.index');

// Route::get('clients/assia', function () {
//   return view('clients/assia')->with('name','assia');
// });


// Route::get('clients/assia', function () {
//   return view('clients/assia');
// });
// Route::post('clients/assia','clientController@store');
// //----------------------------------------------
// Route::get('/post/index', function () {
//   return view('post/index');
// });
// Route::get('post/create', 'clientController@create');
// Route::post('post/index','clientController@store');
// //---------------------------------------------------------
// Route::get('/user/{id}', function ($id) 
// {
//     return 'this is you '.$id;
// });
//  Route::view('post', 'post/index');
Route::get('post','clientController@affichage');
// Route::get('/post', function () 
// {
//   $clients=[
// 'assia',
// 'lasperanza',
// 'divita',

//   ];
//     return view('post/index',['data'=>$clients]);
// });
// Route::get('post', function () {
//       return view('post/index');
//      });

// fonction anonyme ou collback
Route::get('/', function () {
  // return dd( DB::select('select * from client') );
  return view('welcome');
});

Route::get('/enregistrement', 'CheckController@check');
// Route::view('enregistrement','check');
Route::post('/enregistrement', 'CheckController@store');

Route::get('/enregistrement/information',

[
'as'=>'/enregistrement/information',
'uses' => 'CheckController@retour',
]);

Route::get('/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
[
'as'=>'/enregistrement/detail_passeport',
'uses' => 'Detail_passeportController@afficherClient',
]);

Route::post('/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
[
  'as'=>'/enregistrement/detail_passeport',
  'uses' => 'Detail_passeportController@insertToClient',
  ]);
  

Route::get('/enregistrement/informations/bagage',
[
'as'=>'/enregistrement/informations/bagage',
'uses' => 'BagageController@afficherBagage',
]);
Route::post('/enregistrement/informations/bagage','BagageController@storeBagage');
Route::get('/enregistrement/ajouterDesBagages/{num_client},{nom_client},{prenom_client}',
[
'as'=>'/enregistrement/ajouterDesBagages',
'uses' => 'AjouterBagageController@ajouterBagage',
]);

Route::get('/enregistrement/siège',
[
'as'=>'/enregistrement/siège',
'uses' => 'SiègeController@afficherSiège',
]);
Route::get('/enregistrement/paiement', 'paiementController@payer');
Route::get('/enregistrement/macarte', 'paiementController@carte');

Route::get('/enregistrement/carte_embarquement/{num_client},{nom_client},{prenom_client}',
[
  'as'=>'/enregistrement/carte_embarquement',
  'uses' => 'MacarteController@Imprimer',
  ]);



