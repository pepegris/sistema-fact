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
                <th scope='col' abbr='Starter'>Precio 1</th>
                <th scope='col' abbr='Starter'>Precio 2</th>
                <th scope='col' abbr='Starter'>Linea</th>
				<th scope='col' abbr='Starter'>Fecha</th> 
				
			<tr>
		</thead>

        
<?php 


if (isset($_POST)) {

    $articulos=$_POST['art'];
    $fecha_1=$_POST['date1'];
    $fecha_2=$_POST['date2'];
    $tienda=$_POST['bd'];
  
    $serverName = "SQL"; 
    $connectionInfo = array( "Database"=>"$tienda", "UID"=>"syncro", "PWD"=>"syncro");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

   


  

   // var_dump($_POST);


 
    
   // $consulta= sqlsrv_query($conn,"select * from art where art_des like '%$articulos%'");
   $solicitud="select co_art, art_des,fecha_reg , co_lin,prec_vta1,prec_vta5 from art where art_des like '%$articulos%' and fecha_reg between '$fecha_1' and '$fecha_2' order by fecha_reg desc";
   $consulta= sqlsrv_query($conn,$solicitud);




    if ($consulta) {
       
    while ($row=sqlsrv_fetch_array($consulta)) {

        $descripcion = $row[art_des];
        $fecha_reg=$row[fecha_reg];
        $codigo_articulo=$row[co_art];
        $codigo_linea=$row[co_lin];
        $precio_dolares=round($row[prec_vta5]);
        $precio_bolivares=round($row[prec_vta1]);
        
     
        


        echo "
        <tr>
            <td>".$codigo_articulo."</td>
            <td>".$descripcion."</td>
            <td>$".$precio_dolares."</td>
            <td>Bs.".$precio_bolivares."</td>
            <td>".$codigo_linea."</td>
            <td>".date_format($fecha_reg,"Y/m/d")."</td>
           
            
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
