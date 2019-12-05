<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">

</head>
<body>
    <h1>bonjour chwi assia ararbi</h1>
  <div class="container">
  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="/">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="client">Nos client</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">welcome</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
<!-- ici c la partie dynamique  -->
@yield('content')
</div>

</body>
</html>