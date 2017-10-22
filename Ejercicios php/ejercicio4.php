<html>
	<head>
		<title>Ejercicio 4</title>
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
	<h4> mostrar en pantalla cual es el mayor de  numeros </h4>
	<?php
	$n1=54;
	$n2=10;
	
	if($n1>$n2)
	{
		echo"El primer numero (".$n1.") es mayor que el segundo (".$n2.")";
	}
	elseif ($n1==$n2){
		echo "El primer numero (".$n1.")es igual al segundo (".$n2.")";
	}
	else {
		echo "El primer numero (".$n1.")es menorque el segundo (".$n2.")";
	}
	?>
	</center>
	<div class="piepagina">
	<p>Nombre del alumno: VICTOR ADRIAN LAY CIRILO </p>
	<a href="index.php"> regresar al menu </a></div>
	</body>
	</html>