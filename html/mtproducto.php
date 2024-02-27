<?php
include ('../conexion.php');
$result = mysqli_query($conection, "select max(cod_Tproducto) AS id from tipo_producto");
        if($row = mysqli_fetch_row($result)){
            if( mysqli_fetch_row($result) == 0){
                $id = trim($row[0])+1;
    }
}
?>
  
<?php
if(!empty($_POST)){
    $alert = '';

    if(empty($_POST['descripcion']) ){
        $alert = '<p class="msg-error">¡Todos los campos son obligatorios!</p>';
    
    }
    else{
        
        $descripcion = $_POST['descripcion'];

        $query = mysqli_query($conection, "SELECT * FROM tipo_producto where descripcion = '$descripcion' AND estatus = 1 "); //consultar de que ni el usuario, ni el correo exista
        $result = mysqli_fetch_array($query);
        if($result > 0){
            $alert = '<p class="msg-error">Tipo de producto ya existe</p>'; 
        }else{
            $query_ins = mysqli_query($conection, "INSERT INTO  tipo_producto (descripcion) values ('$descripcion')");
    
           if( $query_ins){
            $alert = '<p class="msg-save">El tipo de producto se ha registro correctamente</p>';
            $id+=1;
            unset($_POST);
           }else{
            $alert = '<p class="msg-error">Error al crear el tipo de producto</p>'; 
           }
        }
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Tipo de producto</title>
    <?php  include "../js/script.php" ?>
</head>
<body>
    <?php include "../js/header.php"; ?>
    <section class="container">
        <div class="form_registert">
                <h1>Tipo Producto</h1>
                <hr>
                <div class="alert"><?php echo isset($alert) ? $alert : ' ';?></div>

                <form action="" class="form_r" method="POST">
                        <label  for="cod">Codigo:</label>
                        <input type="number" name="cod" id="cod" placeholder="codigo "  readonly value=<?php echo $id ?>>
                        
                        <label for="descripcion">Descripcion:</label>
                        <input type="textarea" id="descripcion" name="descripcion"  >
                        <input type="submit" value="Salvar" name="guardar" class="btn_save" id="guardar" onclick="saludame();">       
                </form>
            </div>
        </section>
</body>
</html>
