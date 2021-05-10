<?php

include 'php/loading.php';

if (isset($_POST)) {
    require 'php/conexion.php';



    
    $tasa=isset($_POST ['tasa_dia']) ? mysqli_real_escape_string($conn,trim($_POST ['tasa_dia'])) :false;


    if ($conn) {
        $sql= "UPDATE configuracion SET tasa_dia=$tasa WHERE ref =0 ";
 
        $guardar = mysqli_query($conn,$sql);

        if (!$guardar) {
           
           $error= mysqli_error($conn);
           echo "<br><center><h3>ERROR</h3></center>";
           echo "<h4>$error</h4>";

            
             echo "<a href='inicio.php' class='btn btn-danger'>Salir</a>";
           die();
            
        }else {
            header('refresh:2;url= inicio.php');
            exit;
        }

            
 
    }
  









}















?>