<br>
<a href="?c=orderStatus&a=Edit" class="btn btn-primary">New Order Status <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<div class="row">
   <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">ORDER STATUS LIST</h4>
               <p class="text-muted mb-0">Datatable</p>
            </div><!--end card-header-->
            
            <div class="card-body">  
                <table id="OrderStatusList" width="100%" class="table table-striped table-bordered dataTable">
                    <thead>
                        <tr class="text-center">
                             <th>#</th>
                             <th>Status</th>                           
                            <th>Active</th>
                            <th>Edit</th>
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
    $('#OrderStatusList').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=orderStatus&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "Status"},
            {data: "IsActive"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":3,
            "data": "Editar",
            "render": function ( data) {
                return '<a class="btn btn-warning" href="index.php?c=orderStatus&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i>  </a>';
            }
        },{
                "targets": 2,
                "data": "IsActive",
                "render": function (data) {
                    return (data) == 1 ? '<center><button type="button" class="btn btn-success"> <i class="ti-check"></i> </button></center>': '<center><button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button></center>';
         }}]
    });

});
</script>
