<html>
	<head>
		<title>Ejercicio 3</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/Style.css">
	</head>
	<body>
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
	<h4> mostrar en pantalla una tabla de 1 por 10</h4>
	<?php
	
	echo"<h2> BUCLE WHILE </h2><br>";

	
	for($i=0; $i<10; $i++)
	{
		echo "linea.".$i."<br>";
	}
	?>
	</center>
	<div class="piepagina">
	<p>Nombre del alumno:VICTOR ADRIAN LAY CIRILO</p>
	<a href="index.php"> regresar al menu </a>
	</div>
	</body>
	</html>