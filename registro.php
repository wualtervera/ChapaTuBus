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
    <link rel="stylesheet" href="css/icon.css"/>
	
	
    <title>Registro|Chapa tu Bus</title>
	<script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
	<!--<script src="js/dao.js"></script>-->
</head>
    <body> 
		 <div class="mdl-layout mdl-js-layout mdl-layout-login mdl-color--amber-2 mdl-color--image">
			<main class="mdl-layout__content mdl-layout__content-login ">
				<div class="mdl-card mdl-shadow--6dp">
					<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
						<h2 class="mdl-card__title-text">Formulario de resgitro</h2>
					</div>
			  		<div class="mdl-card__supporting-text">
						<form id="formregistro">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="name" />
								<label class="mdl-textfield__label" for="name">Nombre</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="dni" id="dni" />
								<label class="mdl-textfield__label" for="dni">Dni</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="email" id="email" />
								<label class="mdl-textfield__label" for="email">Email</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="password" id="password" />
								<label class="mdl-textfield__label" for="password">Contraseña</label>
							</div>
							<!-- Accent-colored raised button with ripple -->
							<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							  Entrar
							</button><br><br>
							<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
							  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
							  <span class="mdl-checkbox__label">Acepta nuestros </span>							  
							</label>
							<span class="terminos-condiciones">
								<a href="#"> Términos y condiciones</a>
							</span>				
												
						</form>
					</div><br>
				</div>
			</main>
		</div>




	<script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyBzaypu_H3C1kuYKLR_H1TTpUfDEQivb90",
	    authDomain: "chapa-tu-bus-1537326252154.firebaseapp.com",
	    databaseURL: "https://chapa-tu-bus-1537326252154.firebaseio.com",
	    projectId: "chapa-tu-bus-1537326252154",
	    storageBucket: "chapa-tu-bus-1537326252154.appspot.com",
	    messagingSenderId: "500208462342"
	  };
	  firebase.initializeApp(config);
	  
	  var db = firebase.database();
	
	
		document.getElementById('formregistro').onsubmit = function(event){
		    event.preventDefault();
		    var id = document.getElementById('dni').value;
		    var name = document.getElementById('name').value;
		    var email = document.getElementById('email').value;
		    var password = document.getElementById('password').value; 			
					    
		    if(id !="" && name !="" && email !="" && password !=""){
				db.ref('usuarios').push({
						id: id,
				      	name: name,
				      	email: email,
				      	password: password
				    }).then(() => {
				      console.info('Datos gurdados!');
					  location.href="/inso/";	
				    });					
				
			}else{
				console.info('Llene los datos correctamente!');
			}		
				    
		}	  
		  
		  	    
	  
	</script>
	
	
</body>
</html>