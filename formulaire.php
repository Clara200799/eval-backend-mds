
  <?php
  echo "<h2> Formuliare </h2>";
          
<form method="get" action="formulaire.php"> 
<p>
<input type="text" name="cfname"  value="cfname"/>
<input type="text" ville="cfville"  value="cfville"/>
<input type="text" téléphone="cftéléphone" value="cftéléphone" />
<input type="text" mail="cfmail"  value="cfmail" />
<select name="type de projet">
    <option value="wordpress">Choix 1</option>
    <option value="vue.js">Choix 2</option>
</select>
Options du projet
<input type="checkbox" name="formulaire de contact avancé" id="formulaire de contact avancé" /> 
<input type="checkbox" name="adaptations mobile spécifiques" id="adaptations mobile spécifiques" /> 
<input type="checkbox" name="design personnalisé" id="design personnalisé" /> 
</form>
?>

Avec la méthodee get, les données transiteront par l'URL. En revanche cette méthode est peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL. 
Le action sert à envoyée les informations collectées sur une autre page. Ici elle reste sur la page du formulaire. 
Ensuite, les balises type correspondent à un champs et les balise value permettent d'afficher les nom dans les champs. 
La balise select name permet de faire un choix entre plusieurs propositions. Ici WP ou vue. 
La balise checkbox permet de crée des cases à cochées. Ici nous avons 3 cases à cochées. 