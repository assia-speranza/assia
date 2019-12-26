<?php

namespace App\Http\Controllers;
use App\Client;
use App\Aeroport;
use App\Categorie;
use App\Passager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientController extends Controller
{
//   // la fonction nous permet de crer le tableau e d envoyer la vue 
// public function list()
// {

//     $client=client::all();
//     // $client = [
//     //     'assia',
//     //     'rosa',
//     //     'vergine'
//     // ];
//      return view('clients.index',[
//          'clients' =>$client
//      ]);
    
    
//     }
public function create()
    {
        return view('/post/create');
    }





    public function store()
    {
        Passager::GetPass();
      //pour dire le champs doit etre remplis 
      // request()->validate([
      //   'pseudo'=>'bail|required|min:3|unique:passager',
      //   'email'=>'required|email'
      // ]);
    //  $data= Passager::GetPass();
    //   foreach($data as $d)
    //   {

    //     echo ''.$d->pseudo;
    //   }


    //  return view('post/index',[
    //    'data'=>$data,
    //    ]);
      
      // Passager::create($data);
//       $pseudo=  request('pseudo');
//       $email=request('email');
//       // dd($pseudo);
//       $client=new client();
//       $client->name=$pseudo;
//       $client->email=$email;
//       $client->save();
//       return back();

     
//       // dd(session::all());


//     }



//     public function store(Request $request)
//     {
//         print_r( $request->input('pseudo'));
//           // return $pseudo;
//           $data=$request->input();
//           $request->session()->put('userdata',$data);
//     print_r ($request->session()->get('userdata'));
  
     

//     $output=$request->session()->get('userdata');
// if($output['pseudo']=='assia')
// {
//     return view('welcome');

// }
// else
//  {
//   return view('clients/assia');
//  }

// }
// public function show(Request $request, $id)
//     {$id=1;
//         $value = $request->session()->get('key');
// return $value;
//         //
//     }



// }
    }

// public function index($nom)
// {
//   // return view('welcome');
//   return $nom;
// }
// public function getIndex()
// {
//   // return view('welcome');
//   return 'salut les genss!!!!!';
// }

public function ind()
{
     $req=DB::select('select * from aeroports  where code_aeroport = :code_aeroport',['code_aeroport'=>'ALG']);

    return view('post/index',
    
     [
      'req'=>$req
      ]);
}
public function list()
{
 $aeroport=Aeroport::all();
 return view('post/index', [
        'aero' => $aeroport
        ]);

}
public function insert ()
{
DB::insert('insert into passager  (id,pseudo,email ) values (?, ?,?)', [7, 'mero','mero@gmaim.com']);
// return view('post/index');
  }
 public function update ()
 {
   $users= DB::update('update clients set nom_client="assia"where nom_client=?',['lynda']);
 return view('post/index', ['users' => $users]);
 }


 public function affichage()
 {
    //  $users = DB::table('passager')->get();
    // $user = DB::table('passager')->where('pseudo', 'assia')->first();

    // //  return view('post/index', ['users' => $users]);
    // return view('post/index', ['user' => $user]);
    // $email = DB::table('passager')->orwhere('pseudo', '=','assia')->value('email');
    // return view('post/index', ['email' => $email]);
    // $roles = DB::table('clients')->pluck('prenom_client','nom_client');
    // echo dd($roles);
// foreach ($roles as $name => $nom_client) {
//     echo ''.$name.$nom_client;

// }
// $users = Client::count();
// return $users;
// $users = DB::table('clients')->count();
// return $users;
// $bool= DB::table('clients')->where('nom_client', "assia")->exists();
// echo $bool;
// $role = $request->input('role');

// $users = DB::table('passager')
//                 ->when($role, function ($query, $role) {
//                     return $query->where('pseudo', $role);
//                 })
//                 ->get();
//                 return $users;
 //----mass assgnmnt --
//  $comment= App\Client::find(1)->categorie;
// echo dd($comment);
// $user = DB::table('clients')->first();
//  $a=$user->categorie->nom_categorie;
//  return $a;
//  return App\Client->categorie()

//  $assia= Client::first();
//  $assi=$assia->categorie->nom_categorie;
//  return $assi;
//  }
$assia= Client::where('nom_client','Veum')->get();
session()->put('assia', $assia);
$donnee=session()->get('assia');
  return $donnee;




    }
  }