<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	private $x;
   	private $y;
   	private static nb;
   	public function __construct($x,$y){
   		$this->x=$x;
   		$this->y=$y;
   		self::nb++;
   	}
   	public static function afficheNB(){
   		echo self::$nb.'<br>';
   	}
	?>

</body>
</html>