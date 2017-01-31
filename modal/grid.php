<?php 
include('../bd/conexion.php');
$link   = Conectarse();
$query  = "
SELECT  ACODIGO,ACODIGO2,ADESCRI,AUNIDAD,APESO,AFAMILIA,ACOMENTA,STSKDIS FROM MAEART AS M 
LEFT JOIN STKART AS S ON M.ACODIGO=S.STCODIGO AND STALMA='01' WHERE M.AESTADO='V'";
$result = mssql_query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr class="info">
 				<th>Código</th>
 				<th>Código Fabricante</th>
 				<th>Descripción</th>
 				<th>Unidad</th>
 				<th>Peso</th>
 				<th>Familia</th>
 				<th>Stock</th>
 				<th>Ficha</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($row = mssql_fetch_array($result))
         {
        ?>
		<tr>
		<td><?php echo utf8_encode($row['ACODIGO']); ?></td>
		<td><?php echo utf8_encode($row['ACODIGO2']); ?></td>
		<td><?php echo utf8_encode($row['ADESCRI']); ?></td>
		<td><?php echo utf8_encode($row['AUNIDAD']); ?></td>
		<td><?php echo utf8_encode($row['APESO']); ?></td>
		<td><?php echo $row['APESO']; ?></td>
		<td><?php echo $row['STSKDIS']; ?></td>
		<td><?php echo utf8_encode($row['ACOMENTA']); ?></td>
		</tr>
        <?php
         }
 		 ?>
 		</tbody>
 	</table>
 </div>

 <script>
 $(document).ready(function() {
    $('#consulta').DataTable();
} );
 </script>