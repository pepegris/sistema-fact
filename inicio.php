<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fondo.css">
    
    <title>Inicio</title>
</head>
<style>

.empresa #inf-empresa {
    border-radius: 10px;  
  background-color:  rgba(29, 27, 27, 0.205);
  box-shadow: 2px 2px 5px #999;
}

.empresa{
    height: 100vh;
  
    
    display: flex;
    align-items: center;
    justify-content: center;

}
.empresa #inf-empresa{
    width: 500px;
}
</style>
<body>
 

<?php

require_once 'php/menu.php';

?>


    <div class="empresa">
       
        <?php
                require 'php/conexion.php';

                $consulta="SELECT * FROM configuracion";
                $empresa=mysqli_query($conn,$consulta);

                    $datos=mysqli_fetch_assoc($empresa);
                    $empresa=$datos['empresa'];
                    $rif=$datos['rif'];
                    $razon_social=$datos['razon_social'];
                    $numero=$datos['numero'];
                    $direcion=$datos['direcion'];
                    $iva=$datos['iva'];
                    $tasa_dia=$datos['tasa_dia'];
                    
                    $tasa=number_format($tasa_dia, 2, ',', '.');
            ?>
<center>
        <div class="card text-black mb-3" id="inf-empresa" >
            <div class="card-header">Datos de la empresa</div>
            <div class="card-body">
            <h3 class="card-title"><?php echo "$empresa" ?></h3>
            
            <p class="card-text"><b>RIF: </b><?php echo "$rif" ?></p>
            <p><b>Razon Social: </b><?php echo "$razon_social" ?></p>
            <p><b>Tlf:</b> <?php echo "$numero" ?></p>
            <p><b>Dir:</b> <?php echo "$direcion" ?></p>
            <p><b>IVA:</b> <?php echo "$iva" ?>%</p>
            <h4>Tasa del dia</h4>
            <p>Bs <?php echo "$tasa" ?></p>
            
            <form action="cambiar_tasa.php" method="post">
                <input type="number" name="tasa_dia" class="form"  value='<?php echo "$tasa_dia" ?>' id="">
                <input type="submit" class="btn btn-primary" value="Cambiar Tasa">
            </form>
            <br>
            <form action="cambiar_tasa.php" method="post">
                <input type="number" name="tasa_dia" class="form"  value='<?php echo "$iva" ?>' id="">
                <input type="submit" class="btn btn-primary" value="Cambiar Iva   ">
            </form>
            <hr>
            <a href="edit_datos.php" class="btn btn-primary">Cambiar datos de la empresa</a>
        </div>
        </center>  
            
           
            
            
       
        
     

        
    
    
    </div>


















<?php

require_once 'php/footer.php';

?>