<?php

    $alert ='';
    session_start();
    if(!empty($_SESSION['active'])){
        header('location: inicio.php');
    }else{
        if(!empty($_POST) )
        {
            if(empty($_POST['usuario']) || empty($_POST['clave'])){
                $alert= "Ingrese su usuario y su contraseña";
            }else{
                require_once "../conexion.php";
                $usuario= mysqli_real_escape_string($conection, $_POST['usuario']);
                $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));
                $query = mysqli_query($conection, "SELECT nombre, cod_usu, rol, user
                FROM usuario AS u
                INNER JOIN persona AS p ON u.cod_per = p.cod_persona
                INNER JOIN tercero AS t ON p.cod_tercero = t.cod_tercero
                WHERE u.cod_usu = (
                    SELECT cod_usu
                    FROM usuario
                    WHERE user='$usuario' AND clave ='$pass'
                );");
                $result = mysqli_num_rows($query);
                
                //si encuentra registro con las condiciones de la consulta 
                if($result > 0){
                    $data = mysqli_fetch_array($query);
                    //variables de sesion
                    $_SESSION['active']= true;
                    $_SESSION['idUser']= $data['cod_usu'];
                    $_SESSION['nombre']= $data['nombre'];
                    $_SESSION['user']= $data['user'];
                    $_SESSION['rol']= $data['rol']; 

                    header('location:inicio.php');
                }else{
                    $alert= "El usuario o la contraseña son incorrectos";
                    session_destroy();

                }
            }   
            //echo $alert;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Sistema Facturacion</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <section id="container">
        <form action="" method="post">
            <h3>Iniciar sesión</h3>
            <img src="../img/pngtree.jpg" alt="login">

            <input type="text" name="usuario" placeholder="Usuario"  >
            <input type="password" name="clave" placeholder="Clave" >
            <div class="alert"><?php echo isset($alert) ? $alert : '';?></div>
            <input type="submit" value="INGRESAR">

        </form>
    </section>
   
</body>
</html>