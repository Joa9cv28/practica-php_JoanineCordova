<?php 
    include('conexion.php');

    if(!empty($_POST['nombre']) && !empty($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $genero = $_POST['genero'];
        $comentario = $_POST['comentario'];
        $ciudad = $_POST['ciudad'];
        $interes = $_POST['interes'];

        $sql = "INSERT INTO usuarios (nombre, correo, genero, comentario, ciudad, interes)
        VALUES ('$nombre', '$correo', '$genero', '$comentario', '$ciudad', '$interes')";
        
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);

        header('Location: formulario.php');
    }
?>