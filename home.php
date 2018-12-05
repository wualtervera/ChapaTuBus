<?php 
	include_once('class/config.php');
	include_once('class/google.php');
	$google = new Google;
?>

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

    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/css/base.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA6ZA8uaUf1kv8pT7JYKk1R1lcq14TgMA&callback=initMap"></script>
	<script type="text/javascript" src="<?=BASE_URL?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?=BASE_URL?>/js/functions.js"></script>
</head>
      <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header mdl-color-text--white">
            <div class="mdl-layout__header-row"> 
              <h1 class='mdl-layout-title title-blog'>Chapa Tu Bus</h1>
    
                <!-- Add spacer, to align navigation to the right -->
                <div class='mdl-layout-spacer'/>
                <!-- Navigation. We hide it in small screens. -->
                <nav class='mdl-navigation mdl-layout--large-screen-only'>
                    <a class="mdl-navigation__link mdl-color-text--white" href="./">Inicio</a>
                    <a class="mdl-navigation__link mdl-color-text--white" href="">Lineas</a>
                    <a class="mdl-navigation__link mdl-color-text--white" href="">Buscar lINEAS</a>
                    <a class="mdl-navigation__link mdl-color-text--white" href="contacto.html">Contacto</a>
                </nav>
            </div>
          </header>
          <div class="mdl-layout__drawer">
            <div class="user-profile mdl-color--green">
                <ul class="demo-list-control mdl-list">
                    <li class="mdl-list__item mdl-list__item--two-line">
                        <span class="mdl-list__item-primary-content mdl-color-text--white">
                            <i class="material-icons mdl-list__item-avatar">person</i>
                            <span>Usuario</span>
                            <span class="mdl-list__item-sub-title mdl-color-text--white">usuario@gmail.com</span>
                        </span>
                    </li>
                </ul>
            </div>
            <!--<span class="mdl-layout-title">Chappa tu Bus</span>-->
            <nav class="mdl-navigation padding_top0">
                <div class='mdl-layout-spacer'/>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col padding_top0">
                            <ul class="demo-list-item mdl-list padding_top0">
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">home</i> Inicio
                                    </span>
                                </li>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">swap_calls</i> Lineas
                                    </span>
                                </li>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">location_on</i> Buscar Linea
                                    </span>
                                </li>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">directions_bus</i> Empresas
                                    </span>
                                </li>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">favorite_border</i> Favoritos
                                    </span>
                                </li>
                                <hr>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">settings</i> Configuración
                                    </span>
                                </li>
                                <li class="mdl-list__item">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-color-text--grey-600">settings_power</i><a href="./">Salir</a>
                                    </span>
                                </li>
                            </ul>                                     
                    </div>
                </div>
            </nav>
          </div>
          <main class="mdl-layout__content">
            <div class="page-content"><!-- Your content goes here -->

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--3-col"><br>
                        <button type="submit" value="Obtener mi ubicacion - A" onclick="get_my_location();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							  Obtener localización
						</button>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" id="my_lat" class="txt" readonly/>
                            <label class="mdl-textfield__label" for="my_lat">Latitud</label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" id="my_lng" class="txt" readonly/>
                            <label class="mdl-textfield__label" for="my_lng">Latitud</label>
                        </div>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col"><br>
                        <select class="txt-select" onchange="draw_rute(this.value)">
                            <option value="0">Dibujar ruta con &#8595;</option>
                                <?=$google->get_stores();?>
                        </select>
                    </div>
                </div>


                <div class="map" id="map"></div>
                
            <script type="text/javascript">
                start_map();
                get_my_location();
            </script>
              
            </div>
          </main>
        </div>        
    </body>
</body>
</html>