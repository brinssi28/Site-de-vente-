<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(empty($_GET))echo 'pas parametres.<br>';
		else{
			foreach($_GET as key => $value){
				echo $key.!'===>'.$value.'<br>';
			}
		}


	?>

</body>
</html>