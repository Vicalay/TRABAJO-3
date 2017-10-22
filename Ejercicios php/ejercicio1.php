<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicios 1</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/Style.css">
	</head>
	<body>
	<center><h1> VARIABLES </h1></center>
	<div id="encabezado">
    <div id="menu">
	<ul>
	 <li><a href="ejercicio1.php"> Operaciones</a><li>
	 <li><a href="ejercicio2.php"> Tabla 1</a></li>
	 <li><a href="ejercicio3.php"> Tabla 2</a></li>
	 <li><a href="ejercicio4.php"> Mayor 1</a></li>
	 <li><a href="ejercicio5.php"> Mayor 2</a></li>
	</ul>
	</div>
	</div>
	<center>
	 <h1> PROGRAMACION DE APLICACIONES WEB </h1>
	 <h4> hacer un programa que sume, reste, multiplique y divida dos variables </h4>
	  <?php
	  $numero1=10;
	  $numero2=12;
	  //SUMAR
	  $suma=$numero1+$numero2;
	  echo "$numero1+$numero2"."<br>";
	  echo "suma = ".$suma."<br>";
	  //RESTAR
	  $resta=$numero1-$numero2;
	  echo "$numero1-$numero2"."<br>";
	  echo "resta=".$resta."<br>";
	  //MULTIPLICAR
	  $multiplica=$numero1*$numero2;
	  echo "$numero1*$numero2"."<br>";
	  echo "multiplicacion=".$multiplica."<br>";
	  //DIVIDIR
	  $divide=$numero1/$numero2;
	  echo "$numero1/$numero2"."<br>";
	  echo "divicion=".$divide."<br>";
	  ?>
	  </center>
	  <div class="piepagina">
	<p>NOMBRE DEL ALUMNO: VICTOR ADRIAN LAY CIRILO </P>
	<a href="index.php"> regresar a menu </a>
	</div>
	</body>
	</html>