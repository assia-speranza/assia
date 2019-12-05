<?php

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
Route::view('contact','contact');
Route::get('/clients','clientController@list');
Route::post('clients','clientController@store');
Route::get('/','App/Vol@select');

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





//recuperer un tableau passer  un tableau mais il vaut mieux creer un controlleur 

// Route::view('/client','client.index');







