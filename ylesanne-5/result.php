<?php session_start(); ?>
<?php  $username = $_SESSION["username"]; 
	   $password = $_SESSION["password"]; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a>

    <?php 
    $validUsername = $_SESSION["username"];
    $validPassword = $_SESSION["password"];

    // katsetasin nii, et muutsin indexis "testi" "Testiks" ning sain else'i tulemuse

    if (($validUsername == "Merili") && ($validPassword == "test")){
    	echo "Kasutajanimi ja parool on õiged.";
    }
    	else{
    		echo "Kasutajanimi ja/või parool ei klapi.";
    	}
    ?>
  </body>
</html>
