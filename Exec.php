<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once('Perso.php');
		$a=new Perso(4,'essai');
		$b=new Perso(5,'ali');
		$a->affiche();
		$b->affiche();
		echo Perso::nb;
		Perso::afficheNB();


	?>

</body>
</html>