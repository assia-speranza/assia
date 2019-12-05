<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/38A966D6-6197-574D-83DF-D2CBD40D561E/main.js" charset="UTF-8"></script></head>
<body>
        <h1>Dites nous qui voyage</h1>
        <form method="POST" action="/reservation1"> 
        @csrf
            
          <div class="une_personne">
           <div><B>Adulte 1</B>(Passager principale)</div>
            <div>
            Civilite: <select name="civilite_1">
              <option value="monsieur">Mr</option>
              <option value="madame">Mme</option>
              <option value="mademoiselle">Mlle</option>

            </select>

            Prenom: <input name="prenom_1">
           </div>

           <div>  Nom: <input name="nom_1">  </div>
           <div>Date de nissance: <input name="date_de_naissance_1" type="date"> </div>
           <div>  Telephone: <input  name="telephone_1">  </div>
           <div>  N°passeport: <input  name="num_passeport">  </div>
           <div>  Email <input  name="email_1">  </div>
           <div>  code postal <input  name="code_postal">  </div>
           <div>  Nationnalité <input  name="nationnalite">  </div>
           <div>  Pays  <input  name="pays">  </div>
            <div>  Catégorie  <input  name="categorie">  </div>
          </div>




           <div class="une_personne">
                <div><B>Adulte 2</B></div>

                <div>
                Civilite: <select name="civilite_2">
                  <option value="monsieur">Mr</option>
                  <option value="madame">Mme</option>
                  <option value="mademoiselle">Mlle</option>
    
                </select>
    
                Prenom: <input name="prenom_2">
               </div>
    
               <div>  Nom: <input name="nom_2">  </div>
               <div>Date de nissance: <input name="date_de_naissance_2" type="date"> </div>
    
            </div>



            <div class="une_personne">
                    <div><B>Enfant 1</B></div>
    
                    <div>
                    Civilite: <select name="civilite_3">
                      <option value="monsieur">Mr</option>
                      <option value="madame">Mme</option>
                      <option value="mademoiselle">Mlle</option>
        
                    </select>
        
                    Prenom: <input name="prenom_3">
                   </div>
        
                   <div>  Nom: <input name="nom_3">  </div>
                   <div>Date de nissance: <input name="date_de_naissance_3" type="date"> </div>
        
                </div>


          <input type="submit" value="Suivant">
        </form>
</body>

<style>
.une_personne{
    width: 500px;
    border:1px solid black;
    }

div{
  margin: 10px;
}    

</style>
</html>