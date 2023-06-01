<?php include("cabecera.php")?>
<?php include("conexion.php"); ?>
<?php
$objConexion = new conexion();
$proyectos=$objConexion->consultar("SELECT * FROM `proyecto`");
?>
<div class="card mb-3">
  <img src="./imagenes/auto.jpg" class="card-img-top" alt="..." style="height: 18rem;">
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">Carros</h5>
  </div>
</div>

  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($proyectos as $proyecto) {?>
      <div class="col">
        <div class="card">
        <img src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" sizes="" srcset="">
          <div class="card-body">
            <h5 class="card-title"><td><?php echo $proyecto['nombre'];?></td></h5>
            <p class="card-text"> <?php echo $proyecto['descripcion'];?> </p>
          </div>
        </div>
      </div>
    <?php }?>
    
  </div>
  </div>

<?php include("pie.php")?>