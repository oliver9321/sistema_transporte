<?php

$ModoDebug = false;

foreach ($_SESSION['UserOnline']['System'] as $key => $value ){

    if($value->Campo == "Debug"){
        $ModoDebug = $value->Valor;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pantalla | <?=NOMBRE_APLICATION.VERSION ?></title>
		<link rel="stylesheet" href="vendor/bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate.css/animate.min.css">
		<link rel="stylesheet" href="vendor/jscrollpane/jquery.jscrollpane.css">
        <link rel="stylesheet" href="vendor/sweetalert2/sweetalert2.min.css">
         <link rel="stylesheet" href="vendor/jscrollpane/jquery.jscrollpane.css">
		<!-- Neptune CSS -->
		<link rel="stylesheet" href="vendor/tv.css">
        <script type="text/javascript" src="vendor/js/moment.js"></script>
        <script type="text/javascript" src="vendor/js/moment-with-locales.js"></script>
        <script src="vendor/js/firebase.js"></script>
         <script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>

          <style type="text/css">
            body {
                height: 100px !important;
            }
            </style>

    <script>


    if (window.sessionStorage && window.localStorage) {

            var storage = localStorage;
            storage.clear();

            function guardar(clave, valor) {
                storage.setItem(clave, valor);
            }

             function removerItem(clave) {
                storage.removeItem(clave);
            }

        }


        var PlayListYoutube = "";
        var ModoPlayListYoutube = "";
        var LlamadaPorVoz = "";
        // CHAT - FIREBASE
        /*var config = {
            apiKey: "AIzaSyDlbrQJwEOcBugzhUqQDfx-ZMFaFNdqM3g",
            authDomain: "onetime-831a9.firebaseapp.com",
            databaseURL: "https://onetime-831a9.firebaseio.com",
            projectId: "onetime-831a9",
            storageBucket: "onetime-831a9.appspot.com",
            messagingSenderId: "555250185022"
        };*/
        var config = {
            apiKey: "AIzaSyB18r6GtKs6GTHgjlGHwq6W6M_NqyK_uho",
            authDomain: "onetime-49775.firebaseapp.com",
            databaseURL: "https://onetime-49775.firebaseio.com",
            projectId: "onetime-49775",
            storageBucket: "",
            messagingSenderId: "615465094804",
            appId: "1:615465094804:web:dde18622015456d1736e81"
        };


        firebase.initializeApp(config);

        firebase.database().ref('Configuracion_sistema').on('value', function (snapshot) {

            snapshot.forEach(function (e) {

                var config = e.val();

                if(e.key == 'Opcion'){
                    ModoPlayListYoutube = config;
                }

                if(e.key == 'PlayListYoutube'){
                    PlayListYoutube = config;
                }

            });


            $("#PlayListYoutube").val(PlayListYoutube);
            $("#ModoPlayListYoutube").val(ModoPlayListYoutube);

            if($("#PlayListYoutube").val() != '' && $("#PlayListYoutube2").val() == '' ){
                $("#PlayListYoutube2").val($("#PlayListYoutube").val());
            }

            if($("#PlayListYoutube").val() != '' && $("#PlayListYoutube").val() != $("#PlayListYoutube2").val()){
                location.reload();
            }

        });

        firebase.database().ref('Configuracion_modo_llamada_tv').on('value', function (snapshot) {

            snapshot.forEach(function (e) {

                var config = e.val();

                if(e.key == 'ActivarLlamadaVoz'){
                    LlamadaPorVoz =config;
                }

         });

     $("#LlamadaPorVoz").val(LlamadaPorVoz);

 });

function update() {
            $('#DateTime').html(moment().format('LT'));
}
setInterval(update, 1000);

</script>

</head>
	<body class="fixed-header fixed-footer skin-7 content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Header -->
            <div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="#">
                            <div class="logo"></div>
						</a>

					</div>

					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">

						<ul class="nav navbar-nav float-md-right">

							<li class="nav-item dropdown">
								<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                    <p><h1 id="DateTime">00:00</h1></p>
								</a>
							</li>
						</ul>


						<ul class="nav navbar-nav float-md-left">

                            <li class="logo"> <img class="img" src="uploads/<?= $_SESSION['UserOnline']->EmpresaLogo?>" height="60px"></li>

						</ul>

                    </div>
				</nav>
			</div>

			<div class="site-content">
				<!-- Content -->
				<div class="content-area py-2">
					<div class="container-fluid">
						<div class="row row-md mb-1">

                                <div class="col-md-5" >
								<div class="box bg-white user-1" style="background-color: black !important; height:640px; overflow: hidden; ">
								<div id="player" width="100%"></div>
								</div>
							</div>

        

                            <div class="col-md-7">

                                <div class="box box-block bg-white" style="height:650px; overflow: hidden;">

                                    <div class="row row-md">

									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="box box-block tile tile-2 bg-black mb-2">
                                            <div class="t-content">
                                                <h1 class="mb-1">TURNO</h1>
                                            </div>
                                        </div>
                                    </div>

								   <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
										<div class="box box-block tile tile-2 bg-black mb-2">
											<div class="t-content">
												<h1 class="mb-1">PUESTO</h1>
											</div>
										</div>
									</div>

									<div id="ListadoTurnosAtencion"></div>

						          </div>
								</div>

							</div>
						</div>

					</div>
				</div>

                <div class="modal animated flipInX small-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>

                            </div>
                            <div class="modal-body">
                                <center>
                              <b style="font-size:5em" class="text-primary" id="TurnoMostrar"></b>
                                <p><h1>A</h1></p>
                              <b style="font-size:5em" id="PuestoMostrar"></b>
                                </center>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>

				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
							<div class="col-sm-12 text-sm-left mb-0-1">
                                <marquee><p style="font-family: Impact; font-size: 36pt" loop="1" id="Marquesina"></p></marquee>
							</div>
					</div>
				</footer>
			</div>

		</div>
		<div id="audio" class="custom-scroll" hidden></div>
        <input type="hidden" id="TurnoEnPuesto">
        <input type="hidden" id="PlayListYoutube">
        <input type="hidden" id="PlayListYoutube2">
        <input type="hidden" id="ModoPlayListYoutube">
        <input type="hidden" id="LlamadaPorVoz">
        <input type="hidden" value="<?= $_SESSION['UserOnline']->Departamento ?>" name="Departamento" id="Departamento">
        <input type="hidden" id="SucursalID" name="SucursalID"  value="<?= $_SESSION['UserOnline']->SucursalID ?>"><br>
        <input type="hidden" id="EmpresaCodigo" name="EmpresaCodigo"  value="<?= $_SESSION['UserOnline']->EmpresaCodigo ?>">
       

	</body>

</html>

        <!-- Vendor JS -->
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script src="vendor/js/responsivevoice.js"></script>

<script>


     var player;
     var tag = document.createElement('script');
     tag.src = "http://www.youtube.com/player_api";
     var firstScriptTag = document.getElementsByTagName('script')[0];
     firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

     var ModoDebug = "<?php echo $ModoDebug ?>";
     var DepartamentoID = "<?php echo $_SESSION['UserOnline']->DepartamentoID ?>";

     var Puesto = $("#Puesto").val();
     var EmpresaCodigo = $("#EmpresaCodigo").val();
     var Departamento = $("#Departamento").val();

    function onYouTubePlayerAPIReady() {

        setTimeout(function(){

        if(ModoPlayListYoutube == 'Listado'){


            player = new YT.Player('player',
                {
                    height: '600',
                    width: '600',
                    playerVars: {listType:'playlist', list: $("#PlayListYoutube").val(), vq:'hd720', loop:1, controls: 0, showinfo: 0, theme: 'white', rel: 0
                    },events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
                });

        }else{

            player = new YT.Player('player', {
                height: '600',
                width: '600',
                videoId: $("#PlayListYoutube").val(),
                playerVars :{loop: 1, 'vq':'hd720', controls: 0,showinfo: 0,theme: 'dark',rel: 0
                },events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }

            });

        }

        }, 3000);


    }

       function onPlayerReady(event) {
           PlayVideo();
          event.target.setVolume(10);
        }

        function onPlayerStateChange(event) {

            if(event.data === -1) {
                PlayVideo();
            }

            if(event.data === 1) {
                event.target.setVolume(10);
                console.log("reproduciendo");
            }

            if(event.data === 2) {
                console.log("En pausa");
            }
        }


    function StopVideo() {
      player.pauseVideo();
    }

    function PlayVideo() {
        player.playVideo();
    }

    function voiceStartCallback() {
        StopVideo();
       $('.flipInX').modal('show');
    }

    function voiceEndCallback() {
        PlayVideo();
        $('.flipInX').modal('hide');
    }

    var parameters = {
        onstart: voiceStartCallback,
        onend: voiceEndCallback
    }

    $(function(){


    firebase.database().ref('/'+EmpresaCodigo+'/Sucursales/' + Departamento + '/').on('value', function (snapshot) {

      snapshot.forEach(function (e) {

         var json = e.val();
         var retrievedObject = localStorage.getItem(json.Puesto); //FireBase
         var JsonPuestoData = JSON.parse(retrievedObject); //LocalStorage
           // console.log(json);

         if(json.FechaTurno == moment().format('YYYY-MM-DD') && json.DepartamentoID == DepartamentoID){

         if(json.TurnoEnAtencion != 0 && json.TurnoEnAtencion != null) {

            if(JsonPuestoData != null && JsonPuestoData.Puesto  == json.Puesto){

                    switch (json.Estado) {

                            case 'L':

                         //   console.log(JsonPuestoData.Estado + "<--->"+json.Estado+" |Re: "+JsonPuestoData.CantReLlamadas+"<-->"+json.CantReLlamadas+"|"+JsonPuestoData.TurnoEnAtencion+"<-->"+json.TurnoEnAtencion);

                             if(JsonPuestoData.TurnoEnAtencion == json.TurnoEnAtencion && JsonPuestoData.Estado ==  json.Estado && JsonPuestoData.CantReLlamadas != json.CantReLlamadas) {

                                 ReLlamarTurno(json.TurnoEnAtencion, json.Puesto);
                                 var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                 localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                             }else if(JsonPuestoData.TurnoEnAtencion != json.TurnoEnAtencion && json.Estado == "L"){

                                 ReLlamarTurno(json.TurnoEnAtencion, json.Puesto);
                                 var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                 localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                             }else if(JsonPuestoData.TurnoEnAtencion == json.TurnoEnAtencion && JsonPuestoData.Estado !=  json.Estado && JsonPuestoData.CantReLlamadas != json.CantReLlamadas){

                                 ReLlamarTurno(json.TurnoEnAtencion, json.Puesto);
                                 var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                 localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                             }


                                break;

                            case 'P':

                                   MarcarEnPuestoTurno(json.TurnoEnAtencion,json.Puesto);
                                   var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                   localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                                break;
                            case 'F':

                                  FinalizarTurno(json.TurnoEnAtencion, json.PuestoID);
                                  removerItem(json.Puesto);
                                  var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                  localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                                break;

                        case 'A':

                            FinalizarTurno(json.TurnoEnAtencion, json.PuestoID);
                            removerItem(json.Puesto);
                            var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                            localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                            break;

                            default:
                                console.log("Condicion desconocida: "+json.Estado);
                        }


                }else{


                    var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                    localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                     switch (json.Estado) {

                            case 'L':
                                ReLlamarTurno(json.TurnoEnAtencion, json.Puesto);
                                break;

                            case 'P':

                                 MarcarEnPuestoTurno(json.TurnoEnAtencion,json.Puesto);
                                 PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                 localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                                break;

                            case 'F':

                                 FinalizarTurno(json.TurnoEnAtencion, json.PuestoID);
                                 removerItem(json.Puesto);
                                 var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                                localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                                break;

                         case 'A':

                             FinalizarTurno(json.TurnoEnAtencion, json.PuestoID);
                             removerItem(json.Puesto);
                             var PuestoJson = { 'PuestoID': json.PuestoID, 'Puesto': json.Puesto, 'TurnoEnAtencion': json.TurnoEnAtencion, "CantReLlamadas": json.CantReLlamadas , "Estado":json.Estado};
                             localStorage.setItem(json.Puesto, JSON.stringify(PuestoJson));

                             break;


                         default:
                                console.log("Condicion desconocida: "+json.Estado);
                        }

            } // Aqui

            } else{
                console.log("Diferencia en puestos");
            }

        }

            });

    });

});



function FinalizarTurno(Turno, PuestoID){

  $("."+Turno).remove();
  $("."+PuestoID).remove();

}

function ReLlamarTurno(TurnoEnAtencion, Puesto){

 $("#audio").html('<audio src="vendor/audio/tonoturno.mp3" volume="5" type="audio/x-mp3" controls autoplay="autoplay"> ' +
     '<source src="vendor/audio/tonoturno.mp3"/> </audio>');

 setTimeout(function () {

     $("#TurnoMostrar").html(TurnoEnAtencion);
     $("#PuestoMostrar").html(Puesto);
     $('.flipInX').modal('show');

    if(LlamadaPorVoz == 'true'){
      responsiveVoice.speak(TurnoEnAtencion+".. A "+Puesto, "Spanish Female", parameters);
  }

    setTimeout(function () {
    $('.flipInX').modal('hide');
}, 8000);

}, 2000);








}

function MarcarEnPuestoTurno(TurnoEnAtencion,Puesto){

    $("."+TurnoEnAtencion).remove();

  $("#ListadoTurnosAtencion").append('<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ' + TurnoEnAtencion + '">' +
    '<div class="box box-block tile tile-2 bg-primary mb-2">' +
    ' <div class="t-content"><h1 class="mb-1">' + TurnoEnAtencion + '</h1></div> ' +
    ' </div> </div> ' +
    '<div class="col-lg-8 col-md-4 col-sm-6 col-xs-12 ' + TurnoEnAtencion + '">' +
    ' <div class="box box-block tile tile-2 bg-primary mb-2"> ' +
    '<div class="t-content"><h1 class="mb-1">' + Puesto + '</h1></div></div></div>');
  $("#TurnoEnPuesto").val(TurnoEnAtencion);

}

</script>

		<!--MARQUESINA PARA MOSTRAR INFORMACION-->
		<script>

			function GetListMarquesina(HoraActual){

				$.ajax({
					url: "index.php?c=mant_marquesina&a=GetListMarquesina",
					type: "POST",
					data: {Action: "GetListMarquesina", Hora: HoraActual},
					success: function (data) {
                       // console.log(data);

                        if(ModoDebug == true){
                           // console.log(data);
                        }

						if(data != '0'){

							var Json = JSON.parse(data);
							$.each(Json, function( key, value ) {
								$('#Marquesina').append(" | "+value);
							});
						}

					}
				});
			}

			function ShowMarquesina() {
				GetListMarquesina(moment().format('hh:mm'))
			}
			setInterval(ShowMarquesina, 100000);

        </script>


<!--Funcion para cerrar la session-->
<script>

    var ctrlPressed = false;
    // Alt + o para cerrar session
    $(document).keydown(function(e){

        if (e.keyCode == 18)
            ctrlPressed = true;

        if (ctrlPressed && (e.keyCode == 79))
            window.location.href = 'index.php';
    });

</script>


<script type="text/javascript" src="vendor/bootstrap4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
<script type="text/javascript" src="vendor/js/app.js"></script>
<script type="text/javascript" src="vendor/js/ui-modal.js"></script>
<script type="text/javascript" src="vendor/jscrollpane/mwheelIntent.js"></script>
<script type="text/javascript" src="vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
