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
    <title>Chapa tu Bus</title>
</head>
    <body> 
		 <div class="mdl-layout mdl-js-layout mdl-layout-login mdl-color--amber-2 mdl-color--image">
			<main class="mdl-layout__content mdl-layout__content-login ">
				<div class="mdl-card mdl-shadow--6dp">
					<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
						<h2 class="mdl-card__title-text">Chapa Tu Bus.</h2>
					</div>
			  		<div class="mdl-card__supporting-text">
						<form id="formlogin">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="username" />
								<label class="mdl-textfield__label" for="username">Usuario</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="password" id="userpass" />
								<label class="mdl-textfield__label" for="userpass">Contraseña</label>
							</div>
							<!-- Accent-colored raised button with ripple -->
							<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							  Entrar
							</button><br><br>
							<div class="help-login"><a href="/recoverpas.html">¿Olvido su  contraseña?</a> | <a href="registro.html">Regístrate</a></div>
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
	
		
		
		document.getElementById('formlogin').onsubmit = function(event){
		    event.preventDefault();
				var user = document.getElementById('username').value;
				var pass = document.getElementById('userpass').value;
				
				var data = db.ref('usuarios');
				data.on('value', function(snapshot) {
				    snapshot.forEach(function(childSnapshot) {
				      var childData = childSnapshot.val();
						if(user == childData.email && pass == childData.password){
					  		console.log("datos: ",childData.id);
							location.href="/inso/home.php";							
						}else{
							console.log("Error: ",user, pass);
						}
				    });
				});
					   	    
		  }	 
		
	  
	</script>      

</body>
</html>