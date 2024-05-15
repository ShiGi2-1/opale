<!DOCTYPE html>
  <html>
       <head>
	       <title>Mise à jour prix</title>
		   <meta charset="utf-8"/>
		   <meta http-equiv="X-UA-Compatible" content = "IE=edge"/>
		   <meta name="viewport" content ="width=device-width"/>
           <style>

		   </style>
	   </head>
	   <body>
          <div class="form"> 
		    <a href="gestion.php" class ="back_btn">Retour</a> 
			<h2>Modifier</h2> 
			<p class="erreur_message">
			    Veuillez remplir tous les champs 
			</p> 
		  </div> 
		   <form action ="modification.php"method="POST">
		    <label> Identifiant </label>
            <input type="text" name="idprod">

            <input type="submit" value="Afficher" name="button">			
		   </form> 
	  </body>
  
</html>