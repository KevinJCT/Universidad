<?php 

    require_once "conexion.php";

    $conexion=conexion();

        $usuario=$conexion->real_escape_string($_POST['usuario']);
        $pass=$conexion->real_escape_string($_POST['password']);

        $sql="SELECT * from usuarios where CED_USU='$usuario' and CON_USU='$pass'";
        $result=mysqli_query($conexion,$sql);

        if(mysqli_num_rows($result) > 0){
            if($usuario == '1234567890' && $pass=='1234'){
            session_start();
            $_SESSION['active'] = true;
            $_SESSION['user']=$usuario;
            echo 1;
            }else{
                session_start();
                $_SESSION['active'] = true;
                $_SESSION['user']=$usuario;
                    echo 2;
            }
        }else{
            echo 0;
        }
 ?>