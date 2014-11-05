<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
  	<?php 
	  	$link_file = "result.php"; 
	  	$username= "Merili"; 
	  	$age = "21"; 
  	?>
  		<a href="<?php echo $link_file . '?username=' . $username . '&age=' . $age; ?>">Teine leht</a>
  </body>
</html>
