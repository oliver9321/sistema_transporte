<br>
<a href="?c=Drivers&a=Edit" class="btn btn-primary">Drivers <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<div class="row">
   <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">DRIVERS LIST</h4>
               <p class="text-muted mb-0">Administracion</p>
            </div><!--end card-header-->
            
            <div class="card-body">  
                <table id="DriverList" width="100%" class="table table-striped table-bordered dataTable">
                    <thead>
                        <tr class="text-center">
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
            </div>
        </div>
    </div> <!-- end col -->
 </div> <!-- end row -->

<script src="assets/js/jquery.min.js"></script>

    <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap5.min.js"></script>
        <!-- Buttons examples -->
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap5.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/buttons.colVis.min.js"></script>


<script>
$(document).ready(function() {
    $.noConflict();
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
                return '<a class="btn btn-warning" href="index.php?c=Drivers&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i>  </a>';
            }
        },{
                "targets": 5,
                "data": "IsActive",
                "render": function (data) {
                    return (data) == 1 ? '<center><button type="button" class="btn btn-success"> <i class="ti-check"></i> </button></center>': '<center><button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button></center>';
         }}]
    });

});
</script>
