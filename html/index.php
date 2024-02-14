<?php

    $alert ='';
    if(!empty($_POST) )
    {
        if(empty($_POST['usuario']) || empty($_POST['clave'])){
             $alert= "ALGUNO VACIO";
        }else{
            require_once "../conexion.php";
            $usuario= $_POST['usuario'];
            $pass = $_POST['clave'];
            $query = mysqli_query($conection, "SELECT t.nombre, cod_usu
            FROM usuario AS u
            INNER JOIN persona AS p ON u.cod_per = p.cod_persona
            INNER JOIN tercero AS t ON p.cod_tercero = t.cod_tercero
            WHERE u.cod_usu = (
                SELECT cod_usu
                FROM usuario
                WHERE user='$usuario' AND clave ='$pass'
            );");
            $result = mysqli_num_rows($query);
            
            if($result > 0){
                $data = mysqli_fetch_array($query);
                //print_r($data);
                session_start();
                $_SESSION['active']= true;
                $_SESSION['idUser']= $data['cod_usu'];
                $_SESSION['nombre']= $data['nombre'];


            }
        }   
        echo $alert;
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
            <p class="alerta"></p>
            <input type="submit" value="INGRESAR">

        </form>
    </section>
   
</body>
</html>