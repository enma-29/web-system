<!DOCTYPE html>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta rol</title>
    <?php
        include "../js/script.php";
        include "../conexion.php";
        ?>
</head>
<body>
    <?php
    include "../js/header.php";
    ?>

<h4>Consulta de Rol</h4>
    <section  class="principal">
        <label style=¨margin-left:20px;¨ for="caja"></label>
        
        <div class="form-search">
             <a href="mRol.php" class="btn-new">Crear Rol</a> Busqueda: 
            <input type="text" style="margin-left:0px;"  class="busqueda" name="busqueda" id="nombreInput">
</div>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>           
        </table>
<div id="mostrar_mensaje"></div>
        
    </section>

</body>
</html>