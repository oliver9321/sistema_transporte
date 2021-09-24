<br>
<a href="?c=customerType&a=Edit" class="btn btn-primary">New customer type <i class="fa fa-plus" aria-hidden="true"></i></a>

<hr>
<div class="row">
   <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">CUSTOMER TYPE LISTS</h4>
               <p class="text-muted mb-0">Datatable</p>
            </div><!--end card-header-->
            
            <div class="card-body">  
            <div class="table-rep-plugin table-responsive">
                <table id="customerTypeList" width="100%" class="table table-striped table-bordered dataTable mb-0 ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th class="text-center">Active</th>
                            <th class="text-center">Edit</th>
                        </tr>
                     </thead>
                   </table>
</div>
            </div>
        </div>
    </div> <!-- end col -->
 </div> <!-- end row -->


 <script src="assets/js/jquery.min.js"></script>

<!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap5.min.js"></script>

        <!-- Responsive-table-->
    <script src="plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>
    <script src="assets/pages/jquery.responsive-table.init.js"></script>

    <!-- Buttons examples -->
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/buttons.bootstrap5.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/pdfmake.min.js"></script>
    <script src="plugins/datatables/vfs_fonts.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
    <script src="plugins/datatables/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $.noConflict();
    $('#customerTypeList').DataTable({
        dom: 'Bfrtip',
            buttons: [{
            extend: 'copy',
            text: 'Copy to clipboard'
        },{
            extend: 'excel',
            filename: 'Customer Types List'
        },{
            extend: 'pdf',
            filename:  'Customer Types List'
        }
    ],
      "bDestroy": true,
        "responsive": true,
            "ajax": {
                "url": "index.php?c=customerType&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "NameType"},
            {data: "IsActive"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":3,
            "data": "Editar",
            "render": function ( data) {
                return '<center><a class="btn btn-warning" href="index.php?c=customerType&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i>  </a></center>';
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
