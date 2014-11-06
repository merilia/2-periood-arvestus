<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <?php  

    	// still having some problems

	 	if (isset($_POST["username"]) && !empty($_POST["sex"])) {
	     	echo "Tere, {$_POST["username"]}! Tundub, et olete {$_POST["sex"]}.";
	  	}
	  	elseif (empty($_POST["username"]) && !empty($_POST["sex"])) {
	        echo "Palun minge tagasi ja sisestage nimi.";
	    }
	  	elseif (!empty($_POST["username"]) && empty($_POST["sex"])) {
	  		echo "Palun minge tagasi ja valige sugu.";
	    }
		else{
	        echo "Palun minge tagasi ja täitke väljad.";

	    }
	    if (!isset($_POST["username"]) && !isset($_POST["sex"])) {
	        echo "Tundub, et sattusid siia otseteed pidi.";
	    }
    ?>
    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
