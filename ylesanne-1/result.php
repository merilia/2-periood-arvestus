<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a>
	</br>

    <?php 

		print_r($_GET);
		echo "</br>";

		// tingimused leheküljel viibimiseks

    	if($_GET['age']<18){
    		echo "Tere, " .  $_GET['username'] . "!" . "</br>" . "Kahjuks olete liiga noor selle lehekülje külastmiseks.";
    	} 
    		else{
    			echo "Tere, " .  $_GET['username'] . "!" . "</br>" . "Olete lehekülje vaatamiseks piisavalt vana.";
    	}

    	echo "</br>";

    	// kui kasutajanimi või vanus on sisestamata

    	if (isset($_GET["username"], $_GET["age"])) {
        $username = $_GET["username"];
        $age = $_GET["age"]; 
          echo " ";
      	} 
      		else {
          		echo "Tere, tundmatu!" . "<br>" . "Kasutajanimi või vanus on puudu.";
      	}
    ?>
  </body>
</html>
