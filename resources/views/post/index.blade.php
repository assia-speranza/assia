<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="POST">
<!-- alors pour eviter les failles de securite si la personne est legitime -->
@csrf
<div class="form-group">
  Name: <input type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" placeholder="Rentrez un pseudo">
    @error('pseudo')
    <div class="invalid-feedback">
        <!-- Vous devez remplir le chaamp!!!! -->
       {{ $errors->first('pseudo')}}
   </div>
    @enderror

</div>

<div class="form-groupe">
  Email: <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Rentrez votre email" ><br>

  @error('email')
    <div class="invalid-feedback">
        <!-- Vous devez remplir le chaamp!!!! -->
       {{ $errors->first('email')}}
   </div>
    @enderror


</div>

<button type="submit" class="btn btn-primary">Ajouter </button>
</form>

 

  {{dd($data)}}
 
 <?php  
// foreach ($data as   $value) 

// {
//     foreach($value as $key=>$v)
//     {
//     echo 'le nom de l attribut  est '.$key.'la valeur est :'.$v;
//     }
// }




?>
</br>

@foreach ($req as $value)
 @foreach ($value as $v)
   {{$v}}
   @endforeach

 @endforeach 

{{$affected}}
foreach ($users as $user) {
     {{$user->pseudo}}
}


<?php

foreach ($users as $user )
 {
     
     {
    echo $user->pseudo.'</br>',
         $user->email; 
     }
}
?>


{{dd($user)}}














</body>
</html>
