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
				<li><a href="inicio.php">Inicio</a></li>
				<!-- <li><a href="activo_fijo.php">Medicamentos</a> -->
				<li><a href="">Mantenimiento</a>
					<ul>
						<!-- <li><a class="active" href="consultas.php">Consultas</a></li> -->
						<li><a class="active" href="registropaciente.php">Paciente</a></li>
						<li><a class="active" href="m_lentes.php">Registro lentes</a></li>
						<!-- <li><a class="active" href="nuevo_record.php">Record</a></li> -->
						<li><a class="active" href="usuario_registro.php">Usuarios</a></li>
						<li><a class="active" href="mantenimientoempleado.php">Empleado</a></li>
						<li><a class="active" href="mantenimientosuplidor.php">suplidor</a></li>
						<li><a class="active" href="mantenimientocliente.php">cliente</a></li>

						<!-- <li><a class="active" href="mantenimientoproducto.php">Producto</a></li> -->
						<li><a class="active" href="mantenimientocoferta.php">oferta</a></li>
						<!-- <li><a class="active" href="mantenimientoflotilla.php">flotilla</a></li> -->
						<li><a class="active" href="maseguradora.php">Aseguradora</a></li>
						<li><a class="active" href="mplan_seguro.php">Plan seguro</a></li>
						
					</ul>
				</li>
				<li><a href="">Mantenimientos ext</a>
					<ul>
					<li><a class="active" href="mantenimiento_motivo.php">Motivos</a></li>
						<li><a class="active" href="mcomp.php">Complicaciones</a></li>
						<li><a class="active" href="mDepartamento.php">Departamento</a></li>
						<li><a class="active" href="mrol.php">rol</a></li>
						<li><a class="active" href="mtproducto.php">Tipo producto</a></li>
						<li><a class="active" href="mocupacion.php">Ocupacion</a></li>
						<li><a class="active" href="mestatus.php">Estatus</a></li>
						<li><a class="active" href="mrazon.php">Razon de reparacion</a></li>
						<li><a class="active" href="tipo_lente.php">Tipo lentes</a></li>



					</ul>
				<li><a href="">Condiciones</a>
 					<ul>
						 <li><a href="mpeso.php">peso</a></li>
						 <li><a href="mtamanio.php">tamaño</a></li>
						 <li><a href="mforma.php">forma rostro</a></li>
						 <li><a href="mformamontura.php">forma montura</a></li>
						 <li><a href="relacion.php">Combinacion forma-forma monutra</a></li>



					 </ul>
				<li><a class="active" href="">Consultas</a>
					<ul>
					<li><a class="active" href="cpaciente.php">Pacientes</a></li>
						<li><a class="active" href="consulta_record.php">Record</a></li>
						<li><a class="active" href="consulta_usuarios.php">Usuarios</a>	</li>
						<li><a class="active" href="consulta_empleado.php">Empleado</a></li>
						<li><a class="active" href="consulta_suplidor.php">suplidor</a></li>
						<li><a class="active" href="consulta_cliente.php">cliente</a></li>
						<li><a class="active" href="consulta_producto.php">Producto</a></li>
						<li><a class="active" href="consulta_producto.php">Producto</a></li>
						<li><a class="active" href="consultas_consultas.php">Consultas medicas</a></li>
						<li><a class="active" href="consulta_flotilla.php">flotilla</a></li>
					
					</ul>
				</li>
				<li><a class="active" href="">Consultas ext</a>
 					<ul>
					 	<li><a class="active" href="consultar_motivo.php">Motivos consulta</a></li>
					 	<li><a class="active" href="cmcopm.php">Complicaciones</a></li>
						<li><a class="active" href="cRol.php">rol</a></li>
						<li><a class="active" href="ctproducto.php">Tipo producto</a></li>
						<li><a class="active" href="consulta_departamento.php">Departamento</a></li>
						<li><a class="active" href="cocupacion.php">Ocupacion</a></li>
						<a class="active" href="cestatus.php">Estatus</a></li>
						<a class="active" href="consultar_plan.php">Colsutar plan</a></li>
						<li><a class="active" href="consultar_razon.php">Razon de reparacion</a></li>
						<li><a class="active" href="recomendacion.php">Recomendacion</a></li>
						
					</ul>
				<li><a class="active" href="nuevo_record.php">Registro de consulta</a>
				<!-- <li><a href="#">Historial</a></li> -->
				<li><a class="active" href="../js/cerrar_sesion.php">salir</a></li>
            </ul>
          
		</div>
        
    </div>
      
           
        </div><!--contenedor-->
       
    </header>