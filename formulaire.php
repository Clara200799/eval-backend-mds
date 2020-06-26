<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formuliare Application</title>
  </head>
  <body>
<form method="get" action="formulaire.php"> 
 
<p>
<input type="text" name="cfname"  value="cfname"/>
<input type="text" ville="cfville"  value="cfville"/>
<input type="text" téléphone="cftéléphone" value="cftéléphone" />
<input type="text" mail="cfmail"  value="cfmail" />
</p>
 
</form>
</html>
Avec la méthodee get, les données transiteront par l'URL. On pourra les récupérer grâce à $_GET. En revanche cette méthode est peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL. Le action sert à envoyée les informations collectées sur une autre page. Ici elle reste sur la page du formulaire. 
Ensuite, les balises type correspondent à un champs et les balise value permettent d'afficher les nom dans les champs. 