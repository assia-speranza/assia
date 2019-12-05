@extends('layout')
@section('content')
<html>
 <body>
<h1>Client </h1>
<?php foreach($clients as $cl)
{
echo'<ul>';   
echo'<li>' .$cl->name.'<h6> email:</h6> <em class="text-muted">'.$cl->email.'</em></li></ul>';

}
?>

<hr>
<form action="/clients" method="POST">
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
    
</body>
</html>
@endsection
    
    


