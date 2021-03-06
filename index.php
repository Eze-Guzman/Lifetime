<?php
    include 'conection.php';
		session_start();
		/*
    if (isset($_SESSION['dni_logeado'])) {
        header('Location:user_index.php');
    }

    function buscar_dni_repetido($dni,$conexion){
        $sql="SELECT * FROM usuario WHERE dni=$dni;";
        $sel = $conexion -> query($sql);

        if(mysqli_num_rows($sel)>=1){
            return 1;
        }else{
            return 0;
        }
    }

    if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $dni=$_POST['dni'];
        $pass=md5($_POST['contraseña']);

        if(buscar_dni_repetido($dni,$con)==0){
            $consulta = "INSERT INTO `usuario` (
                `id_u` ,
                `nombre` ,
                `apellido` ,
                `dni` ,
                `password` ,
                `correo`
                )
                VALUES (
                NULL , '$nombre', '$apellido', $dni, '$pass', '$email'
                );";
            $ins = $con -> query($consulta);
            if($ins){
                header("location:login.php");
            }else{
                echo('<script language="javascript">alert("Ha ocurrido un error en el registro!!");window.location.href="registro.php"</script>');
            }
        }else{
            echo('<script language="javascript">alert("El DNI ingresado ya existe, por favor Ingrese otro.")</script>');
        }
        
		}
		*/
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Lifetime</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<div id="page-content">
			<div id="description">
				<img src="" alt="" />
				<p>LifeTime te ayuda a tener una mejor calidad de vida tanto en salud física como mental.</p>
			</div>
			<form id="login-form">
				<input type="email" name="login-email" id="login-email" placeholder="Correo electrónico" />
				<input type="password" name="login-password" id="login-password" placeholder="Contraseña" />
				<button type="button" id="login-button">Iniciar Sesion</button> 
				<a href="#">¿Olvidaste tu contraseña?</a>
				<span class="separator">&nbsp;</span>
				<button type="button" onclick="openPopUp('register-form')">Crear cuenta nueva</button> 
			</form>
		</div>
		<div id="pop-up-background"></div>
		<form id="register-form">
			<button type="button" id="close-register-form" onclick="closePopUp('register-form')">X</button> 
			<h1>Registrate</h1>
			<h2>Es rápido y fácil</h2>
			<span class="separator"></span>
			<div>
				<input type="text" name="register-name" id="name" placeholder="Nombre" />
				<input type="text" name="register-surname" id="surname" placeholder="Apellido" />
			</div>
			<input type="email" name="register-email" id="register-email" placeholder="Correo electrónico" />
			<input type="password" name="register-password" id="register-password" placeholder="Contraseña" />
			<p>Fecha de nacimiento</p>
			<div>
				<select name="day" id="day">
					<option disabled="true" selected>Dia</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select name="month" id="month">
					<option disabled="true" selected>Mes</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				<select name="year" id="year">
					<option disabled="true" selected>Año</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
			</div>
			<p>Género</p>
			<div>
				<div class="radio-input">
					<label for="male">Hombre</label>
					<input type="radio" name="gender" id="male" onclick="checkGender()" />
				</div>
				<div class="radio-input">
					<label for="female">Mujer</label>
					<input type="radio" name="gender" id="female" onclick="checkGender()" />
				</div>
				<div class="radio-input">
					<label for="other">Personalizado</label>
					<input type="radio" name="gender" id="custom" onclick="checkGender()" />
				</div>
			</div>
			<div id="custom-gender">
				<select name="gender-pronoun" id="gender-pronoun">
					<option disabled="true" selected>Selecciona tu pronombre</option>
					<option value="male">hombre</option>
					<option value="female">mujer</option>
					<option value="none">neutro</option>
				</select>
				<p>Tu pronombre será visible para todos</p>
				<input placeholder="Género (opcional)" type="text" name="custom-gender-name" id="custom-gender-name" />
			</div>
			<p>Al hacer clic en "Registrarte", aceptas nuestras <a href="#">Condiciones</a>, la <a href="#">Política de datos</a> y la <a href="#">Política de cookies</a>. Es posible que te enviemos notificaciones por email, que puedes desactivar cuando quieras.</p>
			<button type="button">Registrarte</button> 
		</form>
		<script src="pop-ups.js"></script>
		<script src="gender.js"></script>
	</body>
</html>
