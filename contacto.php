<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Material Design Lite -->
    <script src="js/material.min.js"></script>
    <link rel="stylesheet" href="css/material.green-amber.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="css/icon.css">
    <title>Contacto</title>
</head>
    <body> 
		 <div class="mdl-layout mdl-js-layout mdl-layout-login mdl-color--amber-2 mdl-color--image">
			<main class="mdl-layout__content mdl-layout__content-login ">
				<div class="mdl-card mdl-shadow--6dp">
					<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
						<h2 class="mdl-card__title-text">Contacto</h2>
					</div>
			  		<div class="mdl-card__supporting-text">
						<form action="#">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="nombre" />
								<label class="mdl-textfield__label" for="nombre">Nombre</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" id="telefono" />
								<label class="mdl-textfield__label" for="telefono">Teléfono</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="mensaje" />
								<label class="mdl-textfield__label" for="mensaje">Mensaje</label>
							</div>
							<!-- Accent-colored raised button with ripple -->
							<div class="derecha">
								<a href="/home.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							  Enviar</a>
							</div>
						</form>
					</div><br>
				</div>
			</main>
		</div>        
    </body>
</body>
</html>