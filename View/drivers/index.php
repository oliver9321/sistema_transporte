<br>
<a href="?c=Drivers&a=Edit" class="btn btn-primary">Drivers <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<table id="DriverList" width="100%" class="table table-striped table-bordered dataTable">
    <thead>
    <tr>

        <th>#</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Phone 1</th>
        <th>Phone 2</th>
        <th>IsActive</th>
        <th>Modificar</th>
    </tr>
    </thead>

</table>

<script>
$(document).ready(function() {

    $('#DriverList').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=Drivers&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "Name"},
            {data: "LastName"},
            {data: "Phone1"},
            {data: "Phone2"},
            {data: "IsActive"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":6,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=Drivers&a=Edit&Id='+data+'" aria-label="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>';
            }
        },{
                "targets": 5,
                "data": "IsActive",
                "render": function (data) {
                    return (data) == 1 ? '<button type="button" class="btn btn-sm btn-success btn-circle waves-effect waves-light"> <i class="ti-check"></i> </button>': '<button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button>';
         }}]
    });

});
</script>
