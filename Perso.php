<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
   class Perso{
   	private $mat;
   	private $nom;
   	private static nb;
   	
   	public function __construct($mat,$nom){
   		$this->mat=$mat;
   		$this->nom=$nom;
   		self::nb++;
   	}
   	public affiche(){
   		echo $this-> mat.' '.$this->nom.'<br>';
   	}
   	public static function afficheNB(){
   		echo self::$nb.'<br>';
   	}


   }

?>
</body>
</html>