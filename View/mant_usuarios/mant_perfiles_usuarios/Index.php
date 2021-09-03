<a href="?c=mant_perfiles_usuarios&a=Edit" class="btn btn-primary">Crear Perfil (Usuario) <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<table id="ListadoPerfilesUsuarios" width="100%" class="table table-striped table-bordered dataTable">
    <thead>
    <tr>

        <th>#</th>
        <th>Perfil</th>
        <th>Descripción</th>
        <th>IsActive</th>
        <th>Modificar</th>
    </tr>
    </thead>

</table>

<script>
$(document).ready(function() {

    $('#ListadoPerfilesUsuarios').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=mant_perfiles_usuarios&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "Perfil"},
            {data: "Descripcion"},
            {data: "IsActive"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":4,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=mant_perfiles_usuarios&a=Edit&Id='+data+'" aria-label="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>';
            }
          },{
                "targets": 3,
                "data": "IsActive",
                "render": function (data) {
                    return (data) == 1 ? '<button type="button" class="btn btn-sm btn-success btn-circle waves-effect waves-light"> <i class="ti-check"></i> </button>': '<button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button>';
         }}]
    });

});
</script>
