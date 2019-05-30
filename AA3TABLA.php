<?php
$conexion=mysqli_connect('localhost','root','','bdhotel');

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
				<th><center><FONT FACE="courier">Correo</FONT></th>
				<th><FONT FACE="courier">Telefono</FONT></th>
				<th><FONT FACE="courier">check in</FONT></th>
			    <th><FONT FACE="courier">Check-out </FONT></th>
			    <th><FONT FACE="courier">Habitacion </FONT></th>
                <th><center><FONT FACE="courier">Forma de Pago</FONT></th>
			</FONT>

<?php 
		$sql="SELECT * from reservaciones";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['HoradeEntrada'] ?></td>
			<td><?php echo $mostrar['HoradeSalida'] ?></td>
			<td><?php echo $mostrar['habitacion'] ?></td>

			<td><?php echo $mostrar['Formadepago'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
