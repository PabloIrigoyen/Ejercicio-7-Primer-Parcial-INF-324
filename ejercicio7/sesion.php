<?php

include('conexion.php');

$user = $_POST["txtusuario"];
$pass 	= $_POST["txtpassword"];
//Para iniciar sesión
if(isset($_POST["btnloginx"]))
{

$queryusuario = mysqli_query($conexion,"SELECT * FROM gerente as A INNER JOIN persona as B ON (B.nombre = '$user' and A.contrasena='$pass' and A.idPersona=B.idPersona)");
$nr 		= mysqli_num_rows($queryusuario); 
$mostrar	= mysqli_fetch_array($queryusuario); 
	
if (($nr == 1))
	{ 
		session_start();
		$_SESSION['nombre']=$user;
		header("Location:admin.php");
	}
else
	{
        $queryusuario = mysqli_query($conexion,"SELECT * FROM cliente as A INNER JOIN persona as B ON (B.nombre = '$user' and A.idPersona=B.idPersona and A.contrasena='$pass')");
        $nr 		= mysqli_num_rows($queryusuario); 
        $mostrar	= mysqli_fetch_array($queryusuario); 
        if (($nr == 1) )
        { 
            session_start();
            $_SESSION['nombre']=$user;
            header("Location:index.php");
        }
        else{
            echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'inicio.php' </script>";
        }
	}
}
?>