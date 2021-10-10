<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> <!-- Compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="Agregar.css"> <!-- Acá está la vinculación del CSS al HTML-->
        <link rel="icon" type="icon/png" href="data:image/png;base64,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">
        <!--Lo de arriba es la dirección del ícono de la página-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Fuente de iconos de Google-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> <!--Librería Materialize-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- Librería de JQuery-->
        <title>Pimit Marketing</title> <!-- Acá es el nombre de la página-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--Ésto es para que se vea optimamente en mobile-->
        <meta charset="UTF-8"> <!-- Ésto es para que se vea todo en español-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script>$(document).ready(function(){$('select').formSelect(); });</script> <!-- Con ésto llamo a los cuadros de selección-->
        <script>$(document).ready(function(){$('.datepicker').datepicker();});</script> <!-- Con ésto, llamo al calendario-->
    </head>

    <body>
            <nav id="barra"> <!-- Barra de navegación-->
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo"><i class="material-icons">desktop_windows</i>PIMIT Marketing Team</a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="Agregar.php"><i class="material-icons">add_circle</i></a></li>
                            <li><a href="Clientes.php"><i class="material-icons">contacts</i></a></li>
                            <li><a href="Contratos.php"><i class="material-icons">content_paste</i></a></li>
                            <li><a href="Servicios.php"><i class="material-icons">dvr</i></a></li>
                        </ul>
                </div>
            </nav>
            <blockquote class="valign-wrapper col s12 m12 l12" id="Titulo_pagina"> <!-- Título de la página -->
                <h5>
                    Agregue un nuevo cliente
                </h5>
            </blockquote>
        <div class="container">
            <div class="row" id="pagina_cliente"> <!-- Todos los paneles de ingreso de nuevo cliente -->   
                <form method="post" action="Agregar.php" id="nuevo_cliente"> 
                    <div class="col s12 m6 l6 section" id="Nombre"> <!-- Nombre del cliente-->
                        <h5>
                            Nombre
                        </h5>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="input_text" type="text" class="validate" data-length="20" placeholder="Solo caracteres alfabeticos" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode >= 130 && event.charCode <= 163))" maxlength="20" required>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 section" id="N_telf"> <!-- Número de teléfono del cliente-->
                        <h5>
                            Número de Teléfono
                        </h5>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate" data-length="16" placeholder="Solo caracteres numéricos" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 32) || (event.charCode == 43) || (event.charCode == 40) || (event.charCode == 41))" maxlength="16" required>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 section" id="correo_elec"> <!-- Correo electrónico del cliente-->
                        <h5>
                            Correo Electrónico
                        </h5>
                        <div class="input-field col s12 m6 l6 section">
                            <i class="material-icons prefix">mail</i>
                            <input id="mail_prefix" type="email" placeholder="Sin caracteres especiales" class="validate" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode == 64) || (event.charCode == 46) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" maxlength="30" required>
                        </div>
                    </div>
                    <div class="col s12 m l6 section" id="nombre_empresa"> <!-- Nombre de la empresa-->
                        <h5>
                            Nombre de la empresa
                        </h5>
                        <div class="input-field col s12 m6 l6 section">
                            <i class="material-icons prefix">work</i>
                            <input id="input_text" type="text" class="validate" data-length="30" placeholder="Sin caracteres especiales"  onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30" required>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 section" id="Pais"> <!-- País sede de la empresa-->
                        <h5>
                            País Sede
                        </h5>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">flag</i>
                            <input id="input_text" type="text" class="validate" data-length="56" placeholder="Solo caracteres alfabeticos" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="56" required>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 push-s12 m6 l6 section" id="calendario"> <!-- Calendario-->
                        <h5>
                            Seleccione la fecha de contratación
                        </h5>
                        <input type="text" class="datepicker">
                    </div>
                    <div class="col s12 m6 l6 section" id="Servicio_son"> <!-- Panel para seleccionar si tiene o no servicio contratado-->
                        <h5>
                            ¿Tiene contradado un servicio?
                        </h5>
                        <div class="switch input-field col s12 m6 l6" required> 
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Sí</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 section" id="services"> <!-- Acá seleccionas el servicio contratado-->
                        <h5>
                            Escoje un Servicio
                        </h5>
                        <div class="input-field col s12 m6 l6">
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Servicio #1</option>
                                <option value="1">Servicio #2</option>
                                <option value="1">Servicio #3</option>
                                <option value="1">Servicio #4</option>
                                <option value="1">Servicio #5</option>
                                <option value="1">Branding</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light col s12 m12 l2" type="submit" name="action" id="Boton"> <!-- Botón para enviar los datos-->
                        Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> <!-- Compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script> <!--Script para optimizar el cargado de la página-->
    </body>
</html>
