<?php
    include ('conexion.php');

    if(isset($_POST['btn']) && $_POST ['Nombre']!="" && $_POST ['Telefono']!=""  && $_POST ['Documento']!="" && $_POST ['Correo']!="" && $_POST ['Contrasena']!="" ){


            $Nombre = $_POST['Nombre'];
            $Telefono = $_POST['Telefono'];
            $Documento = $_POST['Documento'];
            $Correo = $_POST['Correo'];
            $Contrasena = $_POST['Contrasena'];

    $registro=" INSERT INTO usuario (Nombre, Telefono, Documento, Correo, Contrasena) VALUES ('$Nombre', '$Telefono', '$Documento', '$Correo', '$Contrasena');";
        $guardar=mysqli_query($con, $registro);


        echo '<script>
                alert("Registro exitoso");
                location.href = "../login.html";
                </script>';
       exit;
    }else{
        echo '<script>
                alert("Falta Campos por diligenciar");
                window.history.go(-1);
                </script>';
        exit;
    }

?>