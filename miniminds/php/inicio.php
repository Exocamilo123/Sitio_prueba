<?php

require("conexion.php");

if(isset($_POST['btn'])) {

    if ($_POST['documento']!="" && $_POST['contrasena']!="") {

        $documento = $_POST['documento'];
        $contrasena = $_POST['contrasena'];

        $sql="SELECT contrasena FROM usuario WHERE documento='$documento'";

        $consulta = mysqli_query($con, $sql);        		
        $arreglo = mysqli_num_rows ($consulta);

        $campo = mysqli_fetch_assoc($consulta);
        $hash = $campo['contrasena'];

        if ($arreglo > 0) {

            if(password_verify($Contrasena, $hash)){
	 				
                echo '<script>
                location.href = "../dashboard.html";
                </script>';
 
            }else{
                echo '<script>
                alert("La contraseña no coinside");
                window.history.go(-1);
                </script>';
                
            }

        } else {
            echo '<script>
            alert("Usuario no encontrado");
            window.history.go(-1);
            </script>';
    exit;
        }
    }
}

?>