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
$lg='essai';
$mp='222222';
   if (empty($_POST))header('location:form.php');
   else {
   	if(empty($_POST['nm'])||empty($_POST['ge'])){
   		echo 'champo vide <br>';
   		echo '<a href="form.php"</a>';

   	}
   	else if (strcmp($_POST['nm'],$lg)==0)&&(strcmp($_POST['ge'],$mp)==0){
   		echo 'felicitation';
   		$_SESSION['lg']=$lg;
   		$_SESSION['mp']=$mp;
   		echo '<a href=conn.php> cliquer ici </a>';
   	}
   }
?>
</body>
</html>