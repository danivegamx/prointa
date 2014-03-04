<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>PROINTA</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<!--link rel="stylesheet" type="text/css" href="css/responsive.css" /-->
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/prointa.js"></script>
</head>
<body>
	<header>
		<div id="search_wrapper">
			<input id="search_field" type="text" placeHolder="Buscar producto, cat..." />
			<div id="search_deploy">S</div>
		</div>
		<a id="login_deploy" href="javascript:showLogin();">Login</a>
		<div id="login_wrapper">
			<div class="login_prefix">U</div><input id="login_user" class="login_input_field" type="text" placeHolder="Usuario" required /><br>
			<div class="login_prefix">P</div><input id="login_password" class="login_input_field" type="password" placeHolder="Contraseña" required />
			<input id="login_confirm" class="login_confirm_button" type="submit" value="Iniciar sesión" />
		</div>
	</header>
	<br><br><br>
	<div id="logo_menu">
		<figure>
			<img src="images/logo.png">
		</figure>
		<a id="menu_deploy" href="javascript:showMenu();">M</a>
	</div>
	<section id="cart_search_container">
		<div id="cart_ql_wrapper"><div id="kart">O</div><p><strong>Carrito de compras...</strong><br>Login para mostrar.</p></div>
	</section>
	<aside id="menu">
		<ul>
			<li><a id="first_menu_item" href="#">Productos</a></li>
			<li><a href="#">Categorías</a></li>
			<li><a href="#">Sucursales</a></li>
			<li><a href="#">Ayuda</a></li>
			<li><a id="last_menu_item" href="#">Contacto</a></li>
		</ul>
	</aside>
	<section id="slider_wrapper">
		<article id="slider">
		<a id="prev" href="#"><<</a>
		<a id="next" href="">>></a>
			<figure>
				<img src="images/muestras/01.JPG" />
				<figcaption>
					<p><strong>Portaretratos</strong></p>
					<p>Diferentes tamaños y formas.</p>
				</figcaption>
			</figure>
		</article>
	</section>
	<hr>
	<section id="news">
		<p>Novedades</p>
	</section>
	<section id="offers">
		<p>Ofertas</p>
	</section>
	<footer>
		Prointa webapp v1.0
	</footer>
</body>
</html>