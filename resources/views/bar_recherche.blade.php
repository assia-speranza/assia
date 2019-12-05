<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/38A966D6-6197-574D-83DF-D2CBD40D561E/main.js" charset="UTF-8"></script></head>
<body>
    <form method="GET" action="/recherche">
    @csrf
        
    <div>
      Aeroport de depart <input name="aeroport_depart">
      Aeroport d'arrivé <input name="aeroport_arrive">
    </div>

    <div>
      Type de vole :aller simple<input type="radio" name="type_vol" value="simple" checked> 
      aller retour<input type="radio" name="type_vol"  value="retour">
    </div>


    <div>
        Date de depart   <input type="date" name="date_depart">   
                 @error('date_depart')
                {{$message}}
                @enderror
        Date de retour   <input type="date" name="date_retour">
                @error('date_retour')
                {{$message}}
                @enderror   
    </div>

    <div>
        
       Nombre d'adultes: <input type="number" name="nb_adultes" value="1" class="petit">
                            @error('nb_adultes')
                                {{$message}}
                            @enderror   
       Nombre de jeune adultes: <input type="number" name="nb_jeunes_adultes" value="0" class="petit">
                            @error('nb_jeunes_adultes')
                                {{$message}}
                            @enderror 
       Nombre d'enfants: <input type="number" name="nb_enfants" value="0" class="petit">
                            @error('nb_enfants')
                                {{$message}}
                            @enderror 
       Nombre de bébés: <input type="number" name="nb_bebes" value="0" class="petit">
                            @error('nb_bebes')
                                {{$message}}
                            @enderror 
                            
    </div>

    <div>
        Classe: 
        <select name="classe">
            <option name="classe_economique">economique</option>
            <option name="classe_affaire">affaire</option>
            <option name="classe_premiere">premiere</option>
        </select>
    </div>
    <input type="submit" value="Recherche">

</form>


<style>
    div{
        margin-bottom: 20px;
    }
    .petit{
        width: 40px;
    }

    form{
        width: 730px;
        padding: 10px;
        border: 1px solid black;
    }
</style>
</body>
</html>