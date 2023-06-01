<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $descripcion =$_POST['descripcion'];

    $fecha = new DateTime();


    $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $imagen_temporal=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
    $objConexion = new conexion();
    $sql = "INSERT INTO `proyecto` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}

if($_GET){
     
    $id=$_GET['borrar'];
    $objConexion = new conexion();
    $imagen=$objConexion->consultar("SELECT imagen FROM `proyecto` WHERE id=".$id);

    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM `proyecto` WHERE `proyecto`.`id` =".$id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");

}

// metodo para consultar
$objConexion = new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyecto`");

//print_r($resultado);

?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del vehiculo
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">

                        Nombre del vehiculo <input required class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen del vehiculo <input required class="form-control" type="file" name="archivo" id="">
                        <br />
                        Descripcion:
                        <textarea required name="descripcion" id="" cols="40" ></textarea>
                        <br/>
                        <br/>
                        <input class="btn btn-success" type="submit" value="Subir Vehiculo">

                    </form>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto) {?>
                        <tr class="">
                            <td scope="row"><?php echo $proyecto['id'];?></td>
                            <td><?php echo $proyecto['nombre'];?></td>
                            <td>
                            <img width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" sizes="" srcset="">
                            </td>
                            <td><?php echo $proyecto['descripcion'];?></td>
                            <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>" role="button">Eliminar</a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>








<?php include("pie.php") ?>