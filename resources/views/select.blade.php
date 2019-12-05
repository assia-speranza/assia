@csrf
{{-- @foreach ($resultat_recherche as $vol)


  {{$vol->date_depart}} code_aeroport_arriver   code_aeroport_depart    date_arriver   
@endforeach --}}



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/38A966D6-6197-574D-83DF-D2CBD40D561E/main.js" charset="UTF-8"></script></head>
<body>
    <h1>Sélectionnez votre vol</h1>

@foreach ($resultat_recherche as $vol )
    

    <div class="vol">
        <div>
          20:30 {{$vol->code_aeroport_depart}} --> 22:45 {{$vol->code_aeroport_arriver}}

          <div>{{$vol->date_depart}}</div>
        </div>

        <div>
         <h2>{{$vol->prix_vol}}</h2>
        </div>     

          <div>
          <a href="reservation1?num-vol=AZ123&num-adultes={{$_GET['nb_adultes']}}">  <input type="button" value="Reserver"> </a> ({{$vol->nombre_place_restante}} places restantes)
          </div>

    </div>
@endforeach
    




</body>

<style>
    .vol{
        width:650px;
        border: 1px solid black;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        margin:20px;
        
    }

</style>
</html>