<a href="?c=mant_usuarios&a=Edit" class="btn btn-primary">Crear Usuario <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<table id="ListadoUsuarios" width="100%" class="table table-striped table-bordered dataTable">
    <thead>
    <tr>

        <th>#</th>
        <th>Imagen</th>
        <th>Perfil</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Activo</th>
        <th></th>
    </tr>
    </thead>

</table>

<script>

$(document).ready(function() {

    $('#ListadoUsuarios').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=mant_usuarios&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "Imagen"},
            {data: "Perfil"},
            {data: "Nombre"},
            {data: "Apellido"},
            {data: "Usuario"},
            {data: "Email"},
            {data: "Activo"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":8,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=mant_usuarios&a=Edit&Id='+data+'"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>';
            }
        },{
            "targets": 1,
            "data": "Imagen",
            "render": function (data) {
                return (data) != null ? '<img src="uploads/'+data+'" style="height:50px;" />' : 'No Image';
            }},{
                "targets": 7,
                "data": "Activo",
                "render": function (data) {
                    return (data) == 1 ? '<button type="button" class="btn btn-sm btn-success btn-circle waves-effect waves-light"> <i class="ti-check"></i> </button>': '<button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button>';
         }}]
    });

});
</script>
