<br>
<a href="?c=userProfiles&a=Edit" class="btn btn-primary">New user profile <i class="fa fa-plus" aria-hidden="true"></i></a>
<hr>
<div class="row">
   <div class="col-12">
      <div class="card">
          <div class="card-header bg-dark">
              <h4 class="card-title text-white">USER PROFILE LIST</h4>
               <p class="text-muted mb-0">Datatable</p>
            </div><!--end card-header-->
            
            <div class="card-body">  
            <div class="table-rep-plugin table-responsive">
                <table id="userProfilesList" width="100%" class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-light">
                             <th>#</th>
                             <th>Profile</th> 
                             <th>Description</th>                           
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


<script>
$(document).ready(function() {
    $.noConflict();
    $('#userProfilesList').DataTable({
        dom: 'Bfrtip',
            buttons: [{
            extend: 'copy',
            text: 'Copy to clipboard'
        },{
            extend: 'excel',
            filename: 'User Profiles List'
        },{
            extend: 'pdf',
            filename:  'User Profiles List'
        }
    ],
      "bDestroy": true,
        "responsive": true,
            "ajax": {
                "url": "index.php?c=userProfiles&a=View",
            },
        columns:[
            {data: "Id"},
            {data: "Profile"},
            {data: "Description"},
            {data: "IsActive"},
            {data: "Id"}
        ],"columnDefs": [ {
            "targets":4,
            "data": "Editar",
            "render": function ( data) {
                return '<center><a class="btn btn-warning" href="index.php?c=userProfiles&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i>  </a></center>';
            }
        },{
                "targets": 3,
                "data": "IsActive",
                "render": function (data) {
                    return (data) == 1 ? '<center><button type="button" class="btn btn-success"> <i class="ti-check"></i> </button></center>': '<center><button type="button" class="btn btn-sm btn-danger btn-circle waves-effect waves-light"> <i class="ti-close"></i> </button></center>';
         }}]
    });

});
</script>
