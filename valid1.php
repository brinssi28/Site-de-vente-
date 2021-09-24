<!DOCTYPE html>
<html>
<head>
	<met charset="utf-8">
	<title></title>
</head>
<body>
<?php
   if (empty($_POST))header('location:form.php');
   else {
   	if(empty($_POST['nm'])||empty($_POST['ge'])){
   		echo 'champo vide <br>';
   		echo '<a href="form.php"</a>';

   	}
   	else echo 'felicitation';
   }
?>
</body>
</html>