<!DOCTYPE html>
    
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro Usuario|Sistema Facturacion</title>
    
    
        <?php
            include "../js/script.php";
            include "../conexion.php";
        ?>
    </head>
    <body>
        <?php
        include "../js/header.php";
        ?>
        <section class="container">
            <div class="form_register">
                <h1>Registro Usuario</h1>
                <hr>
                <div class="alert"></div>
                <!-- consultas para los selects -->
                <?php
                //obtner el rol
                $query_rol = mysqli_query($conection, "SELECT * FROM rol WHERE estatus = 1");
                                        
                mysqli_close($conection);
                $result_rol = mysqli_num_rows($query_rol);
                
                ?>
                <form action="">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="nombre" >
                    
                    <label for="apel">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="apellidos" >

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Correo electronico">

                    <label for="user">Usuario:</label>  
                    <input type="text" name= "user" id="user"   placeholder="usuario">

                    <label for="cont">Contraseña:</label>
                    <input type="password" id="cont" name="cont" placeholder="contraseña" >

                    <label for="rol" id="rol">Rol: </label>
                        <select style="margin-left: 70px;" name="rol" id="rol">

                            <?php
                                if($result_rol > 0){
                                    while($rol = mysqli_fetch_array($query_rol)){
                                        ?>
                                <option  value="<?php echo $rol["idr"] ?>"><?php echo $rol["descripcion"] ?></option>
                            <?php
                                    }
                                }                            
                            ?>
                        </select>

                    <input type="submit" value="Crear usuario" class="btn_save">
                </form>
            </div>
        </section>
       
        <?php include "footer.php"?>
    </body>
    </html>