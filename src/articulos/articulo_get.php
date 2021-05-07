<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    
    <title>Inicio</title>
</head>
<style>
    table{
        font-size: 25px;
        border: black solid;
        
        
    }
    
    thead{
      color:white;
    }
    
</style>

<?php
if (isset($_POST)) {
    require 'php/conexion.php';
}else {
    header('refresh:1;url= articulos.php');
    exit;
}

require_once 'php/header.php';
require_once 'php/menu.php';

?>
<body>
 
  <table class="table table-bordered table-hover" id="tblData" >
        <thead style="background-color: black;">
          <tr>
            <td>n°</td>
            <td>Descripción</td>
            <td>Código</td>
            <td>Referencia</td>
            <td>Cantidad</td>
          </tr>
        </thead>
        <tbody>



<?php
   
     $art_des=$_POST['art_des'];
    


    if ($conn) {
        
        

            $sql= "SELECT * FROM art where art_des like '%$art_des%' ";
 
        $buscar = mysqli_query($conn,$sql);

    
                    while($row=mysqli_fetch_assoc($buscar)) { 
                        $campo1=$row['id'];
                        $campo2=$row['art_des'];
                        $campo3=$row['co_art'];
                        $campo4=$row['ref_art'];
                        $campo5=$row['stock'];
                    
                            echo "
                        <tr>
                            <td>".$campo1."</td>
                            <td>".$campo2."</td>
                            <td>".$campo3."</td>
                            <td>".$campo4."</td>
                            <td>".$campo5."</td>
                            
                            
                        </tr>";
                        
                    
                    }
       
    }else {
        header('refresh:5;url= articulos.php');
        exit;
    }

        





?>



   
        </tbody>
      </table>




      <?php

require_once 'php/excel.php';      

require_once 'php/footer.php';

?>
