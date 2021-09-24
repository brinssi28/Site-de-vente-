<?php
   session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<met charset="utf-8">
	<title></title>
</head>
<body>
		<?php
				if(!empty($_SESSION)) echo '<a href="form.php">cliquer ici </a>';
				else echo'bonjour' $SESSION['lg'].' <br>';
		
		?>
</body>
</html>