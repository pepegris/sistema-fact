<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
    <link rel="stylesheet" href="/css/factura/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<style>
    @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
  			body, h1, h2, h3, h4, h5, h6{
    			font-family: 'Bree Serif', serif;
 	 									}
	@media (max-width: 900px){
    #panel input{
        width: 105px;
        height: 30px;
    }
	#factura input{
        width: 150px;
        height: 30px;
    }
	
    
}				  
			
  	</style>
		<div class="container">
			<div class="row">
            
		<div class="col-xs-6">
			<h1><a href=" "><img id="imagen" alt=""  src="img/logo3.png" /> Empresa</a></h1>
		</div>
		<div class="col-xs-6 text-right">
							<div class="panel panel-default">
							<div class="panel-heading">
									<h4>RIF: 
										J-305987-6
									</h4>
									<h4>Empresa
									</h4>
							</div>
							<div class="panel-body" id="factura">
								<h4>FACTURA : 
									<input type="text" name="" placeholder="Numero de Factura" id="">
								</h4>
							</div>
						</div>
					</div>
 
			<hr />
 
			
				<h1 style="text-align: center;">FACTURA</h1> 
			
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Caracas <input type="date" name="" id="">
									
									</h4>
								</div>
						<div class="panel-body" id="panel" >
						
							
								<h4>Comprador :  
									<input  type="text" name="" placeholder="Nombre y Apellido" id="">
									CI/RIF :
									<input  type="text" name="" placeholder="" id="">
								</h4>
					
						</div>
						</div>
					</div>
					
				</div>
<pre></pre>
<table class="table table-bordered">
	<thead >
		<tr >
			<th style="text-align: center;">
				<h4>Cantidad</h4>
			</th>
			<th style="text-align: center;">
				<h4>Concepto</h4>
			</th>
			<th style="text-align: center;">
				<h4>Precio unitario</h4>
			</th>
			<th style="text-align: center;">
				<h4>Total</h4>
			</th>
			
		</tr>
	</thead>
	<tbody>


    <?php
         
         require 'php/conexion.php';

         //CONSULTA DE ARTICULOS
         $consulta="SELECT * FROM art";
         $runC=mysqli_query($conn,$consulta);

         //CONSULTA DE LA TASA DEL DIA
       
         $tasa="SELECT tasa_dia FROM tasa where ref=0";
         $runT=mysqli_query($conn,$tasa);
         $rowT=mysqli_fetch_assoc($runT);
         $dolar=$rowT['tasa_dia'];  

      
          

         while($rowC=mysqli_fetch_assoc($runC)) { 

           $campo1=$rowC['id'];
           $campo2=$rowC['art_des'];
           $campo3=$rowC['co_art'];
           $campo4=$rowC['ref_art'];
               $total=$campo4*$dolar;
               $bolivares=number_format($total, 2, ',', '.');
           $campo5=$rowC['stock'];    

           ?>
         <tr>
          
           <td><?php echo $campo1; ?></td>
           <td><?php echo $campo2; ?></td>
           <td>Bs.<?php echo $bolivares; ?></td>
           <td>Bs.<?php echo $bolivares; ?></td>
          
        
         </tr>
         <?php } ?>
		<!-- <tr>
			<td style="text-align: center;">1</td>
			<td><a href="#"> Asesoramiento de inseminaci&oacute;n vacuna </a></td>
			<td class=" text-right ">28500</td>
			<td class=" text-right ">28500</td>
			
			
		</tr> -->
		
		<tr>
			<td>&nbsp;</td>
			<td><a href="#"> &nbsp; </a></td>
			<td class="text-right">&nbsp;</td>
			<td class="text-right ">&nbsp;</td>
			
		</tr>
		<tr >
			<td colspan="3" style="text-align: right;">Total Bs.</td>
			<td style="text-align: right;"><a href="#" > 28500 </a></td>
			
			
		</tr>
		
		
	</tbody>
</table>
<pre></pre>
		

	<div class="row">
			<div class="col-xs-4">
				<h1><a href=" "><img alt="" src="img/qr.png" /></a></h1>
			</div>
			<div class="col-xs-8">
			
				<div class="panel panel-info"  style="text-align: right;">
					<h6> "LA ALTERACI&Oacute;N, FALSIFICACI&Oacute;N O COMERCIALIZACI&Oacute;N ILEGAL DE ESTE DOCUMENTO ESTA PENADO POR LA LEY"</h6>
				</div>
			
		</div>
	</div>
		
</div>
</div>

</head>
<body>
	<center><input type="button" name="imprimir" value="Imprimir" onclick="window.print();"> </center>
	<br>
	
</body>
</html>