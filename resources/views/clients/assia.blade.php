<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST"   action="  " >
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
    <input type="password" name="password" id="">
    <button type="submit" >login</button>
</div>
</form>




</body>
</html>