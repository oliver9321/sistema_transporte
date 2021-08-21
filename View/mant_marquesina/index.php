<a href="?c=mant_marquesina&a=Edit" class="btn btn-primary">Configurar Marquesina<i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<table id="ListadoMarquesina" width="100%" class="table table-striped table-bordered dataTable">
    <thead>
    <tr>

        <th>#</th>
        <th>Mensaje</th>
        <th>Departamento</th>
        <th>Hora/Final Inicial</th>
        <th>Hora/Final Final</th>
        <th>Activo</th>
        <th>Modificar</th>
    </tr>
    </thead>

</table>

<script>
$(document).ready(function() {

    $('#ListadoMarquesina').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=mant_marquesina&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "TextoMostrar"},
            {data: "Departamento"},
            {data: "Hora-Fecha-inicial"},
            {data: "Hora-Fecha-Final"},
            {data: "Activo"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":6,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=mant_marquesina&a=Edit&Id='+data+'" aria-label="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>';
            }
        },{
                "targets": 5,
                "data": "Activo",
                "render": function (data) {
                    return (data) == 1 ? '<button type="button" class="btn btn-sm btn-success btn-circle waves-effect waves-light"> <i class="ti-check"></i> </button>': '<button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button>';
         }}]
    });

});
</script>
