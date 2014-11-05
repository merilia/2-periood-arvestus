<?php
	  $name = "arvestus";
	  $value = "Cookie on olemas";
	  $expire = time() + (20);
	  //setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
	<pre>
		<?php 
			// print_r($_COOKIE); 
			
			
			$arvestus = isset($_COOKIE["arvestus"]) ? $_COOKIE["arvestus"] : "";
			echo $arvestus;

			if (!isset($_COOKIE["arvestus"])){
			echo "Cookie't ei ole";
			}
		?>
	</pre>
  </body>
</html>
