<?php
// Datos de conexión a la base de datos MySQL
$host = "localhost";
$user = "root";
$password = "123456";
$database = "inventario";

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibir los datos del formulario
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


// Guardar los datos en la base de datos
$sql = "INSERT INTO inventarios (Codigo, Numero_caja, usuario, Numero_orden, Importador, Proveedor, dai, Codigo_ingreso, Cantidad_uni, Tienda, Tienda_ingreso, Marca, Marcaingreso, Descripcion, Descripcion_ingreso , Composicion , Composicion_ingreso , talla_cantidad1, talla_cantidad2, talla_cantidad3, talla_cantidad4, talla_cantidad5, talla_cantidad6, talla_cantidad7, talla_cantidad8, talla_cantidad9, talla_cantidad10, talla_cantidad11, talla_cantidad12, talla_cantidad13, talla_cantidad14, talla_cantidad15, talla_cantidad16, talla_cantidad17,talla_cantidad18, talla_cantidad19, talla_cantidad20, tienemarquilla, cantidad_marquilla, cantidad_factura, Inventario_etyecu, Multiplicador_etiqueta, Total_etiquetas, Tipoetiqueta, Fecha, Observacion, Numero_pallet, pais_origen, pais_prenda, Pictograma1, Pictograma2, Pictograma3, Pictograma4, Pictograma5, Pictograma6) VALUES ('$Codigo', '$Numero_caja', '$usuario','$Numero_orden','$Importador', '$Proveedor','$dai', '$Codigo_ingreso', '$Cantidad_uni', '$Tienda', '$Tienda_ingreso',  '$Marca', '$Marcaingreso', '$Descripcion', '$Descripcion_ingreso','$Composicion', '$Composicion_ingreso', '$talla_cantidad1', '$talla_cantidad2', '$talla_cantidad3', '$talla_cantidad4', 
'$talla_cantidad5', '$talla_cantidad6', '$talla_cantidad7', '$talla_cantidad8 ', '$talla_cantidad9', '$talla_cantidad10', '$talla_cantidad11', '$talla_cantidad12', '$talla_cantidad13', '$talla_cantidad14', '$talla_cantidad15', '$talla_cantidad16','$talla_cantidad17', '$talla_cantidad18',
'$tienemarquilla', '$cantidad_marquilla', '$cantidad_factura', '$Inventario_etyecu', '$Multiplicador_etiqueta', '$Total_etiquetas', '$Tipoetiqueta', '$Fecha', '$Observacion', '$Numero_pallet', '$pais_origen', '$pais_prenda', '$Pictograma1'
'$Pictograma2', '$Pictograma3', '$Pictograma4', '$Pictograma5', '$Pictograma6')";

if (mysqli_query($conn, $sql)) {
    echo "Los datos se han guardado correctamente en la base de datos.";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
