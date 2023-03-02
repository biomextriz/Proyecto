
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de 5 pasos</title>
</head>
<body>
	<h1><h1>Creacion de inventario paso a paso</h1></h1>
	<form method="post" action="procesar.php">
		<!-- Paso 1 -->
		<div id="paso1">
			<h2>Inventario paso 1 de 4</h2>

		<label for="Codigo" class="form-label">1. Codigo</label>
        <select class="form-select"  name="data[Codigo]" >
        <option selected disabled value="">Seleccione</option></select>	

        <label for="Numero_caja" class="form-label">2.Ingresar numero de caja</label>
        <input type="text" class="form-control"  name="data[Numero_caja]"placeholder=" Numero de caja" >

        <label for="usuario" class="form-label">3. Usuario responsable</label>
        <select  class="form-select"  name="data[usuario]"  >
        <option selected disabled value="">Seleccione</option> </select>                       

        <label for="Numero_orden" class="form-label">4. Numero de orden</label>
        <select  class="form-select"  name="data[Numero_orden]"  >
        <option selected disabled value="">Seleccione</option></select>

		<label for="Importador" class="form-label">5. Importador</label>
        <select  class="form-select"  name="data[Importador]" >
        <option selected disabled value="">Seleccione</option></select>


		<label for="Proveedor" class="form-label">6. Proveedor</label>
        <select  class="form-select"  name="data[Proveedor]"  >
        <option selected disabled value="">Seleccione</option></select>

		<label for="dai" class="form-label">7. DAI</label>
        <select  class="form-select"  name="data[dai]" >
        <option selected disabled value="">Seleccione</option></select>
		


		<label for="Codigo_ingreso" class="form-label">8. Ingresar codigo</label>
        <input type="text" class="form-control" name="data[Codigo_ingreso]" placeholder="Codigo" >
        <div class="valid-feedback">Campo llenado.</div>

		<label for="Cantidad_uni" class="form-label">9.Ingresar cantidad de unidades</label>
        <input type="text" class="form-control"  name="data[Cantidad_uni]"  placeholder="Cantidad de unidades" >
        <div class="valid-feedback">Campo llenado.</div>

		<label for="Tienda" class="form-label">10. Tienda</label>
        <select class="form-select"  name="data[Tienda]" >
        <option selected disabled value="">Seleccione</option></select>

		<label for="Tienda_ingreso" class="form-label">11. Ingresar Tienda</label>
        <input type="text" class="form-control"  name="data[Tienda_ingreso]" placeholder="Tienda" >
                            <div class="valid-feedback">Campo llenado.</div>

		<label for="Marca" class="form-label">12. Marca</label>
        <select class="form-select" name="data[Marca]" >
        <option selected disabled value="">Seleccione</option></select>

		<label for="Marcaingreso" class="form-label">13. Ingresar marca</label>
        <input type="text" class="form-control"  name="data[Marcaingreso]" placeholder="Marca" >
        <div class="valid-feedback">Campo llenado.</div></select>


		<label for="Descripcion" class="form-label">14. Descripcion</label>
        <select class="form-select" name="data[Descripcion]" >
        <option selected disabled value="">Seleccione</option></select>

		<label for="Descripcion_ingreso" class="form-label">15. Ingresar descripcion fisica</label>
        <input type="text" class="form-control" name="data[Descripcion_ingreso]"  placeholder="Descripcion fisica" >
        <div class="valid-feedback">Campo llenado.</div>
			<button type="button" onclick="mostrarPaso('paso2')">Siguiente</button>
		</div>
		<!-- Paso 2 -->
		<div id="paso2" style="display:none">
			<h2>Inventario paso 2 de 4</h2>
			<label for="Composicion" class="form-label">1. Seleccionar composicion original</label>
            <select class="form-select" name="data[Composicion]" >
            <option selected disabled value="">Seleccione</option></select>

			<label for="Composicion_ingreso" class="form-label">2. Ingresar composicion de prenda</label>
            <input type="text" class="form-control" name="data[Composicion_ingreso]" placeholder="Composicion de prenda" >
            <div class="valid-feedback">Campo llenado.</div>

            <div class="row align-items-start row g-3 mt-5">
            <div class="col-2"> 
			<label for="talla_cantidad1"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad1]" placeholder="">
            </div>


            <div class="col-2 ">
            <label for="talla_cantidad2"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad2]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad3"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad3]" placeholder="">
            </div>

            <div class="col-2">
            <label for="tallacantidad4"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control"id="tallacantidad4" name="data[tallacantidad4]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad5"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad5]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad6"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad6]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad7"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad7]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad8"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad8]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad9"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad9]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad10"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad10]" placeholder="">
            </div>


            <div class="col-2">
            <label for="talla_cantidad11"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad11]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad12"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad12]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad13"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad13]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad14"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad14]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad15"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad15]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad16"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad16]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad17"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad17]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad18"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad18]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad19"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad19]" placeholder="">
            </div>

            <div class="col-2">
            <label for="talla_cantidad20"class="form-label">Talla/Cantidad</label>
            <input type="text" class="form-control" name="data[talla_cantidad20]" placeholder="">
            </div>

            </div>
			<br><br>
			<button type="button" onclick="mostrarPaso('paso1')">Anterior</button>
			<button type="button" onclick="mostrarPaso('paso3')">Siguiente</button>
		</div>
		<!-- Paso 3 -->
		<div id="paso3" style="display:none">
			<h2>Inventario paso 3 de 4</h2>
			<label for="tienemarquilla" class="form-label">1. Tiene marquilla</label>
            <input type="number" class="form-control"  name="data[tienemarquilla]" placeholder="" >

			<label for="cantidad_marquilla" class="form-label">2. Ingresar cantidad de marquillas</label>
            <input type="number" class="form-control"  name="data[cantidad_marquilla]" placeholder="cantidadmarquilla" >

            <label for="cantidad_factura" class="form-label">3. Cantidad de factura</label>
            <select class="form-select"  name="data[cantidad_factura]" >
            <option selected disabled value="">Seleccione</option></select>

			<label for="Inventario_etyecu" class="form-label">4. Inventario Etyecu</label>
            <input type="text" class="form-control" name="data[Inventario_etyecu]" placeholder="Inventario Etyecu" >

			<label for="Multiplicador_etiqueta" class="form-label">5. Multiplicador de etiqueta</label>
            <input type="number" class="form-control" name="data[Multiplicador_etiqueta]" placeholder="Ingresar x2 x3 x20">

            <label for="Total_etiquetas" class="form-label">6. Total de etiquetas</label>
            <input type="number" class="form-control"  name="data[Total_etiquetas]" placeholder="Total de etiquetas" >

            <label for="Tipoetiqueta" class="form-label">7. Ingresar tipo de etiqueta</label>
            <input type="text" class="form-control"  name="data[Tipoetiqueta]" placeholder="Tipo de etiqueta" >

			<br><br>
			<button type="button" onclick="mostrarPaso('paso2')">Anterior</button>
			<button type="button" onclick="mostrarPaso('paso4')">Siguiente</button>
		</div>
		<!-- Paso 4 -->
		<div id="paso4" style="display:none">
			<h2>Inventario paso 4 de 4</h2>
			<label for="Fecha" class="form-label">1. Ingresar fecha</label>
            <input type="date" class="form-control"   name="data[Fecha]" >

			<label for="Observacion" class="form-label">2. Ingresar observacion</label>
            <input type="text" class="form-control"  name="data[Observacion]" placeholder=" Observacion" >

			<label for="Numero_pallet" class="form-label">3. Ingresar numero de palet</label>
            <input type="number" class="form-control"  name="data[Numero_pallet]" placeholder="Numero de palet" >

			<label for="pais_origen" class="form-label">4. Pais de origen</label>
            <select class="form-select"  name="data[pais_origen]" >
            <option selected disabled value="">Seleccione</option></select>

            <label for="pais_prenda" class="form-label">5. Ingresar pais de prenda</label>
            <input type="text" class="form-control"  name="data[pais_prenda]" placeholder="Pais de prenda" >
     
            <div class="row align-items-start row g-3 mt-5">
            <div class="col-2">
			<label for="Pictograma1" class="form-label">Pictograma</label>
            <input type="text" class="form-control"  name="data[Pictograma1]" placeholder="" >
			</div>
			
			<div class="col-2">
			<label for="Pictograma2" class="form-label">Pictograma</label>
            <input type="text" class="form-control" name="data[Pictograma2]" placeholder="" >
			</div>
			
			<div class="col-2">
			<label for="pictograma2" class="form-label">Pictograma</label>
            <input type="text" class="form-control" id="pictograma2"  name="data[pictograma2]" placeholder="" >
			</div>
			
			<div class="col-2">
            <label for="Pictograma3" class="form-label">Pictograma</label>
            <input type="text" class="form-control"  name="data[Pictograma3]" placeholder="" >
			</div>
			
			<div class="col-2">
			<label for="Pictograma4" class="form-label">Pictograma</label>
            <input type="text" class="form-control" name="data[Pictograma4]" placeholder="" >
			</div>
			
			<div class="col-2">
            <label for="Pictograma5" class="form-label">Pictograma</label>
            <input type="text" class="form-control"  name="data[Pictograma5]" placeholder="" >
			</div>
			
			<div class="col-2">
            <label for="Pictograma6" class="form-label">Pictograma</label>
            <input type="text" class="form-control"  name="data[Pictograma6]" placeholder="" >
			</div>
			</div>

			<br><br>
			<img src="../1.png" class="img-thumbnail" alt="200px">

			<button type="button" onclick="mostrarPaso('paso3')">Anterior</button>
			<button type="submit">Enviar</button>
		</div>
	</form>
	<script>
		function mostrarPaso(paso) {
			document.getElementById("paso1").style.display = "none";
			document.getElementById("paso2").style.display = "none";
			document.getElementById("paso3").style.display = "none";
			document.getElementById("paso4").style.display = "none";
			document.getElementById(paso).style.display = "block";
		}
	</script>
</body>
</html>

