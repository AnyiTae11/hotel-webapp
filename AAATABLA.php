<?php
	
	$link = mysqli_connect('localhost', 'root', '');
	if(!$link){
		echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysqli_error();
	}else{
	//Paso 2 es seleccionar la base de datos
		$base = mysqli_select_db('bdhotel',$link);
		if(!$base){
			echo'No se encontro la base de datos: '.mysqli_error();
		}else{
	//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM reservaciones";
			$ejecuta_sentencia = mysqli_query($sql);
			if(!$ejecuta_sentencia){
				echo'hay un error en la sentencia de sql: '.$sql;
			}else{
	//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				$lista_paises = mysqli_fetch_array($ejecuta_sentencia);
			}
		}
	}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="estiloTabla.css">
	</head>
	<body>
		<h1>Mostrando Datos Desde Una Base De Datos</h1>
		<table>
			<tr>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Hora de Entrada</th>
			    <th>Hora de Salida</th>
			    <th>Forma de Pago</th>



				<?php
					for($i=0; $i<$lista_paises; $i++){
						echo"<tr>";
							echo"<td>";
								echo$lista_paises['Correo'];
							echo"</td>";
							
							echo"<td>";
								echo$lista_paises['Telefono'];
							echo"</td>";

							echo"<td>";
								echo$lista_paises['HoradeEntrada'];
							echo"</td>";

							echo"<td>";
								echo$lista_paises['HoradeSalida'];
							echo"</td>";

							echo"<td>";
								echo$lista_paises['Formadepago'];
							echo"</td>";

							echo"</tr>";
						
						$lista_paises = mysqli_fetch_array($ejecuta_sentencia);	
					}
				?>
			</tr>
		</table>s
	</body>
</html>
