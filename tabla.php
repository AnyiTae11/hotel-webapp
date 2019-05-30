<?php
$conexion=mysqli_connect('localhost','root','','superaaa');

?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="estiloTabla1.css">
	</head>
	<body><center>
		<h1><FONT FACE="small fonts"> Base de Datos de Reservaciones</FONT></h1>
		<br>
		<table>
			<tr>
				<th><center><FONT FACE="courier">nombre</FONT></th>
				<th><FONT FACE="courier">costo</FONT></th>
				<th><FONT FACE="courier">Num.de Estante</FONT></th>
			    <th><FONT FACE="courier">cantidad </FONT></th>
			   </FONT></th>
			</FONT>

<?php 
		$sql="SELECT * from tablatienda";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['costo'] ?></td>
			<td><?php echo $mostrar['estante'] ?></td>
			<td><?php echo $mostrar['cantidad'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
