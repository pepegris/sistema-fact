<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
include 'cabecera.php'  ;
if (isset($_POST)) {
    $titulo=$_POST['bd'];
    
}

?>
<br>
<center><h2> <?php echo $titulo; ?> </h2></center>
<br>

<table  class='table table-hover' id="tblData" >
        <thead>
            <tr class='table-primary'>
                <th scope='col' abbr='Starter'>Codigo Articulo</th>
                <th scope='col' abbr='Starter'>Articulos</th>
                <th scope='col' abbr='Starter'>Stock</th>
                <th scope='col' abbr='Starter'>Total</th>
               
				
			<tr>
		</thead>

        
<?php 


if (isset($_POST)) {

    $linea=$_POST['linea'];
    $fecha_1=$_POST['date1'];
    $fecha_2=$_POST['date2'];
    $tienda=$_POST['bd'];
  
    $serverName = "SQL"; 
    $connectionInfo = array( "Database"=>"$tienda", "UID"=>"syncro", "PWD"=>"syncro");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

   


  

   // var_dump($_POST);


 
    
   // $consulta= sqlsrv_query($conn,"select * from art where art_des like '%$articulos%'");
   $solicitud="select * from st_almac inner join art on st_almac.co_art=art.co_art where art.co_lin='$linea' and st_almac.stock_act > 0 and st_almac.co_alma=1";
   $consulta= sqlsrv_query($conn,$solicitud);




    if ($consulta) {
       
    while ($row=sqlsrv_fetch_array($consulta)) {

        $descripcion = $row[art_des];
    
        $codigo_articulo=round($row[co_art]);

        $stock = round($row[stock_act]);
        
        $total+=$stock;

        
        
     
        


        echo "
        <tr>
            <td>".$codigo_articulo."</td>
            <td>".$descripcion."</td>
            <td>".$stock."</td>
            <td>".$total."</td>
            
           
            
        </tr>";
     
    

   
}




    } else {

        echo "Error en la consulta datos ingresados erroneos";
       
    }

    
    

    



}





?>
<script type="text/javascript">


function exportTableToExcel(tableID, filename='' ){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

    
</script>

      

        </table>   
        <center><button class='btn btn-success btn-lg' onclick="exportTableToExcel('tblData')">Exportar a Excel</button></center>
        <br>
        <br>
        
    
</body>

</html>
