<html>
	<head>
		<title>Ejercicio 2</title>
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
	<center><h1> PROGRAMACION DE APLICACIONES WEB </h1>
	<h4> mostrar en pantalla una tabla de 10 por 10 con los numero del 1 al 100</h4>
	<?php
	echo "<table border=1>";
	$n=1;
	for ($n1=1; $n1<=10; $n1++)
	{
		echo"<tr>";
		for ($n2=1; $n2<=10; $n2++)
		{
		echo "<td>",$n,"</td>";
		$n=$n+1;
		
		}
		echo"</tr>";
	}
	echo"</table>";
	?>
	</center>
	<div class="piepagina">
	<p>Nombre del alumno: VICTOR ADRIAN LAY CIRILO </p>
	<a href="index.php"> regresar al menu </a>
	</div>
	</body>
	</html>