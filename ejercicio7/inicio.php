<html>
<head>
	<meta charset="UTF-8">
     <title>Inicio de sesión</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="cajafuera">
    <div class="formulariocaja">
        <div class="botondeintercambiar">
            
             <button type="button" class="botoncambiarcaja" onclick="loginvai()">Login</button>
		</div>
				<div class="logovai">
					<img src="logo.png">
				</div>
		<!--Formulario para el login -->
        <form id="frmlogin" class="grupo-entradas" method="POST" action="sesion.php">
        <input type="text" class="cajaentradatexto" placeholder="&#128273; Ingresar nombre" name="txtusuario" required>
        <input type="password" class="cajaentradatexto" placeholder="&#128274; Ingresar contraseña" name="txtpassword" required>
        <input type="checkbox" class="checkboxvai"><span>Recordar contraseña</span>
        <button type="submit" class="botonenviar" name="btnloginx">Iniciar sesión</button>
        </form>
    </div>
    </div>
    <script>
    var x = document.getElementById("frmlogin");
    var y = document.getElementById("frmregistrar");
    var z = document.getElementById("btnvai");
            function loginvai(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>