<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
     <title>Consulta</title>
    <?php include('enlaces/principal.php'); ?>
	<?php include('enlaces/datatables.php'); ?>
    <?php include('enlaces/sweetalert.php'); ?>
  </head>
  <body>
    <div class="container-fluid">
    <br>
  
		
	  <div class="row">
		<div class="col-xs-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
		    Articulos Codrise
		    <div class="pull-right">
		    <a href="../uploads/codrise.xlsx" class="btn btn-xs btn-success">Descargar ODBC</a>
		    </div>
			</div>
			<div class="panel-body">

			<div id="loader" class="text-center"> <img src="img/loader.gif"></div>
			<div class="datos_ajax"></div><!-- Datos ajax Final -->
			<div class="outer_div"></div><!-- Datos ajax Final -->
			
			</div>
		</div>
		</div>
	  </div>


	</div>

	<script src="js/app.js"></script>
	<script>
		$(document).ready(function(){
			load(1);
		});
	</script>
 </body>
</html>