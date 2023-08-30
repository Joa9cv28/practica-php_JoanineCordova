<!DOCTYPE html>
<?php require('conexion.php'); ?>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Contacto</title>
		<link rel="stylesheet" href="stylesheet.css">
		
		<link rel="shortcut icon" href="Estrella.png">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@1,700&family=Varela+Round&family=Ysabeau+SC&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	</head>
	<body>
		<div class="background">
			<main>
				<div class="nav">
					<a href="index.php">INICIO</a>
					<a href="formulario.php" style="margin-left: 30px;">FORMULARIO</a>	
				</div>
				<h1 class="animate__animated animate__wobble">Formulario</h1>
				<fieldset>
					<form action="store.php" method="POST">
						<label>Nombre</label><br>
						<input type="text" name="nombre" placeholder="Nombre"><br>
						<br><label>Email</label><br>	
						<input type="correo" name="correo" placeholder="Email"><br>
						<br><label>Genero</label><br>
						<input type="radio" name="genero" value="masculino">Masculino
						<input type="radio" name="genero" value="femenino">Femenino
						<br><br><legend>Contraseña</legend>
						<input type="password" name="contraseña" placeholder="Contraseña"><br>
						<br><label>Comentario</label><br>
						<textarea name="comentario" rows="5" cols="30" placeholder="Escriba su comentario"></textarea><br>				
						<br><label>Ciudad</label><br>
						<select name="ciudad">
							<option value="Elija una opción">Elija una opción</option>
							<option value="Guadalajara">Guadalajara</option>
							<option value="Zapopan">Zapopan</option>
							<option value="Tonala">Tonala</option>
							<option value="Tlajomulco">Tlajomulco</option>
							<option value="Otra">Otra</option>	
						</select><br>
						<br><label>Me interesa contratarte</label><br>
						<input type="checkbox" name="interes" value="Sí"><label>Sí</label>
						<br><br><button type="submit">Subir</button>
					</form>
				</fieldset>
			</main>
		</div>
		<?php 
			echo "<h1>HOLA MUNDO PHP</h1>";

			$sql = "SELECT * FROM usuarios";
			$stmt = $conn->prepare($sql);
			$stmt->execute();

			// Configura los resultados como un arreglo asociativo
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			
			// $stmt->fetchAll() Obtiene el arreglo asociativo
			echo "<ul>";
			foreach ($stmt->fetchAll() as $row) {
				echo "<li>" . $row['id'] . " - " . $row['nombre'] . " " . $row['correo'] . "</li>";
			}
			echo "</ul>";

		?>
	</body>
</html>