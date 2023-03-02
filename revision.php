<!DOCTYPE html>
<html>
<head>
	<title>Revisión de datos</title>
</head>
<body>
	<h1>Revisión de datos</h1>

	<?php
	// Recuperar los datos enviados en el formulario
    $Codigo = $_POST ['Codigo'];
    $Numero_caja =$_POST['Numero_caja'];
    $usuario = $_POST['usuario'];
    $Numero_orden = $_POST['Numero_orden'];
    $Importador = $_POST['Importador'];
    $Proveedor = $_POST['Proveedor'];
    $dai = $_POST['dai'];
    $Codigo_ingreso = $_POST['Codigo_ingreso'];
    $Cantidad_uni = $_POST['Cantidad_uni'];
    $Tienda = $_POST['Tienda'];
    $Tienda_ingreso = $_POST['Tienda_ingreso'];
    $Marca =$_POST['Marca'];
    $Marcaingreso =$_POST['Marcaingreso'];
    $Descripcion =$_POST['Descripcion'];
    $Descripcion_ingreso =$_POST['Descripcion_ingreso'];
    $Composicion =$_POST['Composicion'];
    $Composicion_ingreso =$_POST['Composicion_ingreso'];
    $talla_cantidad1 =$_POST['talla_cantidad1'];
    $talla_cantidad2 =$_POST['talla_cantidad2'];
    $talla_cantidad3 =$_POST['talla_cantidad3'];
    $talla_cantidad4 =$_POST['talla_cantidad4'];
    $talla_cantidad5 =$_POST['talla_cantidad5'];
    $talla_cantidad6 =$_POST['talla_cantidad6'];
    $talla_cantidad7 =$_POST['talla_cantidad7'];
    $talla_cantidad8 =$_POST['talla_cantidad8'];
    $talla_cantidad9 =$_POST['talla_cantidad9'];
    $talla_cantidad10 =$_POST['talla_cantidad10'];
    $talla_cantidad11 =$_POST['talla_cantidad11'];
    $talla_cantidad12 =$_POST['talla_cantidad12'];
    $talla_cantidad13 =$_POST['talla_cantidad13'];
    $talla_cantidad14 =$_POST['talla_cantidad14'];
    $talla_cantidad15 =$_POST['talla_cantidad15'];
    $talla_cantidad16 =$_POST['talla_cantidad16'];
    $talla_cantidad17 =$_POST['talla_cantidad17'];
    $talla_cantidad18 =$_POST['talla_cantidad18'];
    $talla_cantidad19 =$_POST['talla_cantidad19'];
    $talla_cantidad20 =$_POST['talla_cantidad20'];
    $tienemarquilla =$_POST['tienemarquilla'];
    $cantidad_marquilla =$_POST['cantidad_marquilla'];
    $cantidad_factura =$_POST['cantidad_factura'];
    $Inventario_etyecu =$_POST['Inventario_etyecu'];
    $Multiplicador_etiqueta =$_POST['Multiplicador_etiqueta'];
    $Total_etiquetas =$_POST['Total_etiquetas'];
    $Tipoetiqueta =$_POST['Tipoetiqueta'];
    $Fecha =$_POST['Fecha'];
    $Observacion =$_POST['Observacion'];
    $Numero_pallet =$_POST['Numero_pallet'];
    $pais_origen =$_POST['pais_origen'];
    $pais_prenda =$_POST['pais_prenda'];
    $Pictograma1 =$_POST['Pictograma1'];
    $Pictograma2 =$_POST['Pictograma2'];
    $Pictograma3 =$_POST['Pictograma3'];
    $Pictograma4 =$_POST['Pictograma4'];
    $Pictograma5 =$_POST['Pictograma5'];
    $pictograma6 =$_POST['Pictograma6'];


	// Mostrar los datos al usuario para su revisión
	echo "<p>Por favor, revise los datos antes de enviarlos:</p>";
	echo "<ul>";
	echo "<li><strong>Codigo:</strong> " . $Codigo . "</li>";
	echo "<li><strong>Numero_caja:</strong> " . $Numero_caja . "</li>";
	echo "<li><strong>usuario:</strong> " . $usuario . "</li>";
	echo "<li><strong>Numero_orden:</strong> " . $Numero_orden . "</li>";
	echo "<li><strong>Importador:</strong> " . $Importador . "</li>";
	echo "<li><strong>Proveedor:</strong> " . $Proveedor . "</li>";
    echo "<li><strong>dai:</strong> " . $dai . "</li>";
	echo "<li><strong>Codigo_ingreso:</strong> " . $Codigo_ingreso . "</li>";
	echo "<li><strong>Cantidad_uni:</strong> " . $Cantidad_uni . "</li>";
	echo "<li><strong>Tienda:</strong> " . $Tienda . "</li>";
	echo "<li><strong>Tienda_ingreso:</strong> " . $Tienda_ingreso . "</li>";
	echo "<li><strong>Marca:</strong> " . $Marca . "</li>";
    echo "<li><strong>Marcaingreso:</strong> " . $Marcaingreso . "</li>";
	echo "<li><strong>Descripcion:</strong> " . $Descripcion . "</li>";
	echo "<li><strong>Descripcion_ingreso:</strong> " . $Descripcion_ingreso . "</li>";
	echo "<li><strong>Composicion:</strong> " . $Composicion . "</li>";
	echo "<li><strong>Composicion_ingreso:</strong> " . $Composicion_ingreso . "</li>";
	echo "<li><strong>talla_cantidad1:</strong> " . $talla_cantidad1 . "</li>";
    echo "<li><strong>talla_cantidad2:</strong> " . $talla_cantidad2 . "</li>";
	echo "<li><strong>talla_cantidad3:</strong> " . $talla_cantidad3 . "</li>";
	echo "<li><strong>talla_cantidad4:</strong> " . $talla_cantidad4 . "</li>";
	echo "<li><strong>talla_cantidad5:</strong> " . $talla_cantidad5 . "</li>";
	echo "<li><strong>talla_cantidad6:</strong> " . $talla_cantidad6. "</li>";
	echo "<li><strong>talla_cantidad7:</strong> " . $talla_cantidad7 . "</li>";
    echo "<li><strong>talla_cantidad8:</strong> " . $talla_cantidad8 . "</li>";
	echo "<li><strong>talla_cantidad9:</strong> " . $talla_cantidad9 . "</li>";
	echo "<li><strong>talla_cantidad10:</strong> " . $talla_cantidad10 . "</li>";
	echo "<li><strong>talla_cantidad11:</strong> " . $talla_cantidad11 . "</li>";
	echo "<li><strong>talla_cantidad12:</strong> " . $talla_cantidad12 . "</li>";
	echo "<li><strong>talla_cantidad13:</strong> " . $talla_cantidad13 . "</li>";
    echo "<li><strong>talla_cantidad14:</strong> " . $talla_cantidad14 . "</li>";
	echo "<li><strong>talla_cantidad15:</strong> " . $talla_cantidad15 . "</li>";
	echo "<li><strong>talla_cantidad16:</strong> " . $talla_cantidad16 . "</li>";
	echo "<li><strong>talla_cantidad17:</strong> " . $talla_cantidad17 . "</li>";
	echo "<li><strong>talla_cantidad18:</strong> " . $talla_cantidad18 . "</li>";
	echo "<li><strong>talla_cantidad19:</strong> " . $talla_cantidad19 . "</li>";
    echo "<li><strong>talla_cantidad20:</strong> " . $talla_cantidad20 . "</li>";
	echo "<li><strong>tienemarquilla:</strong> " . $tienemarquilla . "</li>";
	echo "<li><strong>cantidad_marquilla:</strong> " . $cantidad_marquilla . "</li>";
	echo "<li><strong>cantidad_factura:</strong> " . $cantidad_factura . "</li>";
	echo "<li><strong>Inventario_etyecu:</strong> " . $Inventario_etyecu . "</li>";
	echo "<li><strong>País:</strong> " . $Multiplicador_etiqueta . "</li>";
    echo "<li><strong>Total_etiquetas:</strong> " . $Total_etiquetas . "</li>";
	echo "<li><strong>Tipoetiqueta:</strong> " . $Tipoetiqueta . "</li>";
	echo "<li><strong>Fecha:</strong> " . $Fecha . "</li>";
	echo "<li><strong>Observacion:</strong> " . $Observacion . "</li>";
	echo "<li><strong>Numero_pallet:</strong> " . $Numero_pallet . "</li>";
	echo "<li><strong>pais_origen:</strong> " . $pais_origen . "</li>";
	echo "<li><strong>pais_prenda:</strong> " . $pais_prenda . "</li>";
	echo "<li><strong>Pictograma1:</strong> " . $Pictograma1 . "</li>";
    echo "<li><strong>Pictograma2:</strong> " . $Pictograma2 . "</li>";
	echo "<li><strong>Pictograma3:</strong> " . $Pictograma3 . "</li>";
	echo "<li><strong>Pictograma4:</strong> " . $Pictograma4 . "</li>";
	echo "<li><strong>Pictograma5:</strong> " . $Pictograma5 . "</li>";
	echo "<li><strong>Pictograma6:</strong> " . $Pictograma6 . "</li>";
	echo "</ul>";

	// Mostrar el botón de confirmación
	echo "<form action='guardar.php' method='post'>";
	echo "<input type='hidden' name='nombre' value='" . $nombre . "'>";
	echo "<input type='hidden' name='email' value='" . $email . "'>";
	echo "<input type='hidden' name='telefono' value='" . $telefono . "'>";
	echo "<input type='hidden' name='direccion' value='" . $direccion . "'>";
	echo "<input type='hidden' name='ciudad' value='" . $ciudad . "'>";
	echo "<input type='hidden' name='pais' value='" . $pais . "'>";
	echo "<input type='submit' name='confirmar' value='Confirmar'>";
	echo "</form>";
	?>
</body>
</html>
