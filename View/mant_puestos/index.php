<a href="?c=mant_puestos&a=Edit" class="btn btn-primary">Crear Puesto <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<table id="ListadoPuestos" width="100%" class="table table-striped table-bordered dataTable">
    <thead>
    <tr>

        <th>#</th>
        <th>Código</th>
        <th>Puesto</th>
        <th>Descripcion</th>
        <th>Departamento</th>
        <th>Sucursal</th>
        <th>Empresa</th>
        <th>Activo</th>
        <th>Modificar</th>
    </tr>
    </thead>

</table>


<script>
$(document).ready(function() {

    $('#ListadoPuestos').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=mant_puestos&a=View",
            },
        columns:[
            {data: "PuestoID"},
            {data: "PuestoCodigo"},
            {data: "Puesto"},
            {data: "PuestoDescripcion"},
            {data: "Departamento"},
            {data: "Sucursal"},
            {data: "Empresa"},
            {data: "Activo"},
            {data: "PuestoID"}
        ],"columnDefs": [ {
            "targets":8,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=mant_puestos&a=Edit&Id='+data+'" aria-label="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>';
            }
        },{
                "targets": 7,
                "data": "Activo",
                "render": function (data) {
                    return (data) == 1 ? '<button type="button" class="btn btn-sm btn-success btn-circle waves-effect waves-light"> <i class="ti-check"></i> </button>': '<button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button>';
         }}]
    });

});
</script>
