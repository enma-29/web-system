
<?php
    include("../conexion.php");
    $nombre = $_POST['nombre'];
    if ($nombre == '') {
        $resultados = mysqli_query($conection, "SELECT cod_Tproducto, descripcion FROM tipo_producto where estatus = '1'");
    } else {
        $resultados = mysqli_query($conection, "SELECT cod_Tproducto, descripcion FROM tipo_producto WHERE descripcion LIKE '%$nombre%' AND estatus = '1'");
    }
    $result = mysqli_num_rows($resultados);
    
    if ($result > 0) {
        while ($data = mysqli_fetch_array($resultados)) {
            ?>
        <table>
            <tr>
                <td><?php echo $data['cod_Tproducto']; ?></td>
                <td><?php echo $data['descripcion']; ?></td>
                <td>
                    <?php if ($data['cod_Tproducto'] != 1) { ?>
                        <a href="editar_rol.php?id=<?php echo $data['cod_Tproducto']?>" class="link_edit">Editar</a>
                        ||
                        <a href="eRol.php?id=<?php echo $data['cod_Tproducto']?>" class="link_delete">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="3">No se encontraron resultados.</td>
        </tr>
        <?php
    }
    ?>
</table>
