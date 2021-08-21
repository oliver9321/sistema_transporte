<!DOCTYPE html>
<html lang="es">
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=NOMBRE_APLICATION.VERSION ?></title>
		<link rel="stylesheet" href="vendor/bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendor/sweetalert2/sweetalert2.min.css"> <!-- AGREGAR-->
		<script type="text/javascript" src="vendor/angular.js"></script>
		<link rel="stylesheet" href="vendor/css/core.css">
    <script type="text/javascript" src="vendor/sweetalert2/sweetalert2.min.js"></script>
         <script src="vendor/js/firebase.js"></script>



    <script>

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

    </script>

	<style>

		.BtnTipoTurno {
		  box-shadow: 0 1px 2px rgba(0,0,0,0.15);
		  transition: box-shadow 0.3s ease-in-out;
		}

		.BtnTipoTurno:hover {
		  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
		}

		#Imprime{
			visibility: hidden;
		}

        .col-md-4{
            float:right !important;
        }


    </style>


</head>
	<body class="skin-default">

	<div class="wrapper" ng-app="appBotonesPantallaModule" ng-controller="CtrlBotonesPantallaController">

				<div class="container-fluid">

                            <center>
							<img class="img-responsive" src="uploads/<?=$_SESSION['DataUserOnline']['Usuario']->EmpresaLogo;?>"  height="100">
							<!--<h3 class="text-center"><?=$_SESSION['DataUserOnline']['Usuario']->EmpresaDescripcion;?></h3>-->
							<h5><?php echo $_SESSION['DataUserOnline']['Usuario']->Departamento." - ".$_SESSION['DataUserOnline']['Usuario']->Sucursal; ?></h5>
                          </center>
                    <br>

						<div class="row row-sm">

							<div ng-repeat="b in ListadoBotones">

							<div class="col-md-4" ng-if="b.TipoBoton == 'BloqueA'">
								<div class="box box-block bg-white BtnTipoTurno" data-valorBoton="{{b.ValorBoton}}" data-BotonID="{{b.BotonTurnoID}}" ng-click="GenerarTicketTurno($event)">
									<div class="row">
										<div class="col-md-4 col-sm-4 text-center">
											<img class="img-fluid b-a-radius-circle" src="uploads/{{b.Logo}}" alt="" width="100" height="100">
										</div>
										<div class="col-md-8 col-sm-8">
											<br>
											<p><h2 class="text-{{b.Color}}">{{b.TextoGraMostrar}}</h2></p>
                                            <b ng-if ="b.TextoPeqMostrar != ''"><h6>{{b.TextoPeqMostrar}}</h6></b>
                                            <b ng-if ="b.TextoPeqMostrar == ''"><h6>Presione para seleccionar</h6></b>
										</div>
									</div>
								</div>
							</div>
						</div>

						</div>

					<div class="row row-sm">
						<div ng-repeat="b in ListadoBotones">

							<!--TIPO DE BOTON BLOQUE 2 -->
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 " ng-if="b.TipoBoton == 'BloqueB'">
								<div class="box box-block tile tile-2 bg-{{b.Color}} mb-2 BtnTipoTurno"  data-valorBoton="{{b.ValorBoton}}" data-BotonID="{{b.BotonTurnoID}}" ng-click="GenerarTicketTurno($event)">
									<div class="t-icon right"><i class="{{b.Icono}}"></i></div>
									<div class="t-content">
										<h1 class="mb-1">{{b.TextoGraMostrar}}</h1>
										<h6 class="text-uppercase"><b>{{b.TextoPeqMostrar}}</b></h6>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row row-sm">
						<div ng-repeat="b in ListadoBotones">

							<!--TIPO DE BOTON BLOQUE 3 -->

							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-if="b.TipoBoton == 'BloqueC'">
								<div class="box box-block bg-white  tile tile-3 mb-2 BtnTipoTurno"   data-valorBoton="{{b.ValorBoton}}" data-BotonID="{{b.BotonTurnoID}}" ng-click="GenerarTicketTurno($event)">
									<div class="t-icon right"><i class="{{b.Icono}}"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase"><b>{{b.TextoPeqMostrar}}</b></h6>
										<h1 class="mb-0 text-{{b.Color}}">{{b.TextoGraMostrar}}</h1>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row row-sm">

						<div ng-repeat="b in ListadoBotones">

							<!--TIPO DE BOTON BLOQUE 4 -->

							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-if="b.TipoBoton == 'BloqueD'">
								<div class="box box-block bg-white tile tile-4 mb-2 BtnTipoTurno"  data-valorBoton="{{b.ValorBoton}}" data-BotonID="{{b.BotonTurnoID}}"  ng-click="GenerarTicketTurno($event)">
									<div class="t-icon left bg-info"><i class="{{b.Icono}}"></i></div>
									<div class="t-content text-xs-right">
										<h6 class="text-uppercase"><b>{{b.TextoPeqMostrar}}</b></h6>
										<h1 class="mb-0 text-{{b.Color}}">{{b.TextoGraMostrar}}</h1>
									</div>
								</div>
							</div>

						</div>
					</div>

					</div>

		<div id="Imprime"></div>

        <div hidden>
            Puesto:<input type="text" value="<?= $_SESSION['DataUserOnline']['Usuario']->Puesto ?>" name="Puesto" id="Puesto">
            Departamento:<input type="text" value="<?= $_SESSION['DataUserOnline']['Usuario']->Departamento ?>" name="Departamento" id="Departamento">
            DepartamentoID:<input type="text" value="<?= $_SESSION['DataUserOnline']['Usuario']->DepartamentoID ?>" name="DepartamentoID" id="DepartamentoID">
            SucursalID:<input type="text" id="SucursalID" name="SucursalID"  value="<?= $_SESSION['DataUserOnline']['Usuario']->SucursalID ?>"><br>
            EmpresaCodigo:<input type="text" id="EmpresaCodigo" name="EmpresaCodigo"  value="<?= $_SESSION['DataUserOnline']['Usuario']->EmpresaCodigo ?>">
        </div>


		<!-- Vendor JS -->
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/js/moment.js"></script>
		<script type="text/javascript" src="vendor/js/moment-with-locales.js"></script>


		<script>
            moment.locale('es');

			var app = angular.module('appBotonesPantallaModule', []);

			app.controller('CtrlBotonesPantallaController', function($scope, $http) {

				$scope.sucursal = '<?= $_SESSION['DataUserOnline']['Usuario']->Sucursal?>';
				$scope.sucursalID = '<?= $_SESSION['DataUserOnline']['Usuario']->SucursalID?>';
				$scope.empresa = '<?= $_SESSION['DataUserOnline']['Usuario']->Empresa?>';
				$scope.empresaLogo = '<?= $_SESSION['DataUserOnline']['Usuario']->EmpresaLogo?>';
                $scope.departamento = '<?= $_SESSION['DataUserOnline']['Usuario']->Departamento?>';

				$http.post("index.php?c=ponche&a=ListadoBotones", {Sucursal:$scope.sucursalOnline}).then(function (response) {

					if(response.status == 200){

						if(response.data){
							$scope.ListadoBotones = response.data;
						}else{
							$scope.ListadoBotones = [{'TextoGraMostrar': 'No hay Turnos', 'TextoPeqMostrar':'Error al cargar los Turnos' ,'Color': 'danger', 'Icono':'fa fa-user', 'TipoBoton': 'BloqueA'}];
						}

					}else{
						$scope.ListadoBotones = [{'TextoGraMostrar': 'No hay Turnos', 'TextoPeqMostrar':'Error al cargar los Turnos' ,'Color': 'danger', 'Icono':'fa fa-user', 'TipoBoton': 'BloqueA'}];
					}

				}, function() {
					$scope.ListadoBotones = [{'TextoGraMostrar': 'No hay Turnos', 'TextoPeqMostrar':'Error al cargar los Turnos' ,'Color': 'danger', 'Icono':'fa fa-user', 'TipoBoton': 'BloqueA'}];
				});


				$scope.GenerarTicketTurno = function(BtnSeleccionado){

					$scope.ValorTurnoBoton = BtnSeleccionado.currentTarget.getAttribute("data-valorBoton");
					$scope.BotonID = BtnSeleccionado.currentTarget.getAttribute("data-BotonID");

					$http.post("index.php?c=ponche&a=GenerarTurno", {Action: "GenerarTurno",BotonID: $scope.BotonID,  SucursalID: $scope.sucursalID}).then(function (response) {

						if(response.data[0]){

							$scope.NuevoTurno = response.data[0].Contador;
                            ActualizarFireBaseTurnoTomado($scope.ValorTurnoBoton+"-"+$scope.NuevoTurno);
                            $scope.MaquetaPrint = "<html><body style='font-family:Calibri; margin-top:-100px; '><center><img src='uploads/"+$scope.empresaLogo+"' width='150' height='100' '><br><b style='font-family:Calibri;font-size:0.8em;'> "+$scope.empresa+"</b><b style='font-family:Calibri;font-size:0.8em;'><br>"+$scope.sucursal+"-"+$scope.departamento+"</b><br> ____________________<br><b style='font-family:Calibri;'>TURNO</b></div><br><div style='font-family:Calibri;font-size:2em;'>"+$scope.ValorTurnoBoton+"-"+$scope.NuevoTurno+"</div><div style='font-family:Calibri;'> ____________________</div><p>"+moment().format('DD/MM/YYYY, h:mm:ss A');+"</p></center></body></html>";
    						document.getElementById('Imprime').innerHTML = $scope.MaquetaPrint;
	    				    ImprimirVar();

                            swal({
                                title: '',
                                text: $scope.MaquetaPrint,
                                timer: 5000,
                                showConfirmButton: true,
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonClass: 'btn btn-primary btn-lg mr-1',
                                confirmButtonText: 'Gracias por preferirnos!',
                            });


						}
					}, function (error) {
						console.log('an error occurred', error.data);
					});


				};

			});

			function ImprimirVar()  {

			   var objeto=document.getElementById('Imprime');  //obtenemos el objeto a imprimir
			   var ventana=window.open('ImprimirVar',  'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=400');  //abrimos una ventana vacía nueva
			   ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
			   ventana.print();
			   ventana.document.close();  //cerramos el documento
			   ventana.close();  //cerramos la ventana


			   return false;

			}

		</script>

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

        <script>


            function ActualizarFireBaseTurnoTomado(TurnoTomadoPonche){

                var EmpresaCodigo = $("#EmpresaCodigo").val();
                var Departamento = $("#Departamento").val();
                var DepartamentoID = $("#DepartamentoID").val();
                var SucursalID = $("#SucursalID").val();
                var Puesto = $("#Puesto").val();

                var DataPuesto = {
                    'TurnoTomadoPonche': TurnoTomadoPonche,
                    'DepartamentoID' : $("#DepartamentoID").val(),
                    'Departamento' : $("#Departamento").val(),
                    'SucursalID':$("#SucursalID").val(),
                    "FechaTurno": moment().format('YYYY-MM-DD')
                };


                var updates = {};
                updates['/'+EmpresaCodigo+'/Sucursales/' + Departamento + '/' + Puesto + '/'] = DataPuesto;
                firebase.database().ref().update(updates);

            }

        </script>


		<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
		<script type="text/javascript" src="vendor/js/ui-notifications.js"></script>
		
	</body>
</html>