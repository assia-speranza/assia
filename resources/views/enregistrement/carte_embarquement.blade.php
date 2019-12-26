<h1> carte embarquement</h1>
<h1> vol: {{$vol->num_vol}}</h1>
<h1> référence de reservation: {{$reservation->reference_reservation}}</h1>
@foreach($listeEnregistre as $key)
<h1>passager: {{$key->nom_client}} {{$key->prenom_client}}</h1>
<a href="{{route('/enregistrement/carte_embarquement',[$key->num_client,$key->nom_client,$key->prenom_client])}}"><input type="submit" name="submit" value="télécharger la carte d'embarquement"></a>

@endforeach