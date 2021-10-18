<?php
include("db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name'])>=1  && 
    strlen($_POST['email'])>=1 &&
    strlen($_POST['subject'])>=1 &&
    strlen($_POST['message'])>=1) {
        $nombre=trim($_POST['name']);
        $correo=trim($_POST['email']);
        $asunto=trim($_POST['subject']);
        $mensaje=trim($_POST['message']);
        $consulta="INSERT INTO datos(correo,asunto,nombre,mensaje) VALUES ('$nombre','$correo','$asunto','$mensaje')";
        $resultado=mysqli_query($conex,$consulta);
        if ($resultado) {
        ?>
            <script>
                alert("Mensaje enviado correctamente");
            </script>
        <?php
        }
    }else{
        ?>
            <script>
                alert("Ups se produjo un error");
            </script>
        <?php
    }
}
?>