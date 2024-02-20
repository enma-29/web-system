<?php
 session_start();
 if(empty($_SESSION['active']))
 {
	 header("location:index.php");
 }else{

 }
 
 
    ?>

<header class="site-header Inicio">
        <div class= "contenedor contenido-header">
			<!-- <a href="/"> -->
			<!-- </a>  -->
			<div class="cabe">
			
			<h2>Baterias <span>WFC</span></h2>
			<p>Rep. Dom. <?php echo fechaC();?></p>
			<p>Usuario: <?php echo $_SESSION['nombre'];?></p>
			</div>

    <div class="barra">
		  <div id="header">
			<ul class="nav">
				<li><a href="inicio.php">INICIO</a></li>
				<!-- <li><a href="activo_fijo.php">Medicamentos</a> -->
				<li><a href="">USUARIOS</a>
					<ul>
						<!-- <li><a class="active" href="consultas.php">Consultas</a></li> -->
						<li><a class="active" href="../html/usuario_registro.php">NUEVO USUARIO</a></li>
						<li><a class="active" href="m_lentes.php">LISTA DE USUARIOS</a></li>
						<!-- <li><a class="active" href="nuevo_record.php">Record</a></li> -->
						<!-- <li><a class="active" href="usuario_registro.php">Usuarios</a></li>
						<li><a class="active" href="mantenimientoempleado.php">Empleado</a></li>
						<li><a class="active" href="mantenimientosuplidor.php">suplidor</a></li>
						<li><a class="active" href="mantenimientocliente.php">cliente</a></li> -->

						<!-- <li><a class="active" href="mantenimientoproducto.php">Producto</a></li> -->
						<!-- <li><a class="active" href="mantenimientocoferta.php">oferta</a></li> -->
						<!-- <li><a class="active" href="mantenimientoflotilla.php">flotilla</a></li> -->
						<!-- <li><a class="active" href="maseguradora.php">Aseguradora</a></li>
						<li><a class="active" href="mplan_seguro.php">Plan seguro</a></li> -->
						
					</ul>
				</li>
				<li><a href="">CLIENTES</a>
					<ul>
					<li><a class="active" href="mantenimiento_motivo.php">NUEVO CLIENTE</a></li>
						<li><a class="active" href="mcomp.php">LISTA DE CLIENTES</a></li>
						<!-- <li><a class="active" href="mDepartamento.php">Departamento</a></li>
						<li><a class="active" href="mrol.php">rol</a></li>
						<li><a class="active" href="mtproducto.php">Tipo producto</a></li>
						<li><a class="active" href="mocupacion.php">Ocupacion</a></li>
						<li><a class="active" href="mestatus.php">Estatus</a></li>
						<li><a class="active" href="mrazon.php">Razon de reparacion</a></li>
						<li><a class="active" href="tipo_lente.php">Tipo lentes</a></li> -->



					</ul>
				<li><a href="">PROVEEDORES</a>
 					<ul>
						 <li><a href="mpeso.php">NUEVO PROVEEDOR</a></li>
						 <li><a href="mtamanio.php">LISTA DE PROVEEDORES</a></li>
						 <!-- <li><a href="mforma.php">forma rostro</a></li>
						 <li><a href="mformamontura.php">forma montura</a></li>
						 <li><a href="relacion.php">Combinacion forma-forma monutra</a></li>
 -->


					 </ul>
				<li><a class="active" href="">PRODUCTOS</a>
					<ul>
					<li><a class="active" href="cpaciente.php">NUEVO PRODUCTO</a></li>
						<li><a class="active" href="consulta_record.php">LISTA DE PRODUCTOS</a></li>
						<!-- <li><a class="active" href="consulta_usuarios.php">Usuarios</a>	</li>
						<li><a class="active" href="consulta_empleado.php">Empleado</a></li>
						<li><a class="active" href="consulta_suplidor.php">suplidor</a></li>
						<li><a class="active" href="consulta_cliente.php">cliente</a></li>
						<li><a class="active" href="consulta_producto.php">Producto</a></li>
						<li><a class="active" href="consulta_producto.php">Producto</a></li>
						<li><a class="active" href="consultas_consultas.php">Consultas medicas</a></li>
						<li><a class="active" href="consulta_flotilla.php">flotilla</a></li>
					 -->
					</ul>
				</li>
				<li><a class="active" href="">EXTRA</a>
 					<ul>
						<li><a class="active" href="../html/mantenimientos/mtproducto.php">NUEVO T-PRODUCTO</a></li>
					 	<li><a class="active" href="consultar_motivo.php">LISTA T-PRODUCTO</a></li>
					 	<li><a class="active" href="consultar_motivo.php">NUEVA MARCA</a></li>
					 	<li><a class="active" href="cmcopm.php">LISTA DE MARCAS</a></li>
						<li><a class="active" href="cRol.php">NUEVO MODELO</a></li>
						<li><a class="active" href="ctproducto.php">LISTA DE MODELOS</a></li>
						<li><a class="active" href="consulta_departamento.php">NUEVA GARANTIA</a></li>
						<li><a class="active" href="cocupacion.php">LISTA DE GARANTIAS</a></li>
						<!-- <a class="active" href="cestatus.php">Estatus</a></li>
						<a class="active" href="consultar_plan.php">Colsutar plan</a></li>
						<li><a class="active" href="consultar_razon.php">Razon de reparacion</a></li>
						<li><a class="active" href="recomendacion.php">Recomendacion</a></li> -->
						
					</ul>
				<li><a class="active" href="nuevo_record.php">FACTURAS</a>
				<li><a href="#">NUEVA FACTURA</a></li>
				<li><a class="active" href="../js/cerrar_sesion.php">SALIR</a></li>
            </ul>
          
		</div>
        
    </div>
      
           
        </div><!--contenedor-->
       
    </header>