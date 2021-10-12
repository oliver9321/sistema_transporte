<br>

<div class="position-fixed top-0 end-0 p-3" style=" z-index: 9999999 !important;">
    <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body toast-success">
                <!-- Message from js -->
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
    <div id="toastError" class="toast align-items-center text-white bg-danger border-0" role="alert"
        aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body toast-error">
                <!-- Message from js -->
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>



        <div class="row">
        <div class="col-md-12">

        <div class="row">
                                <div class="col-12 col-lg-6 col-xl"> 
                                    <div class="card" id="PendingBlock">
                                        <div class="card-body bg-warning">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4 text-white"><?=$CountOrdersPending?></span>      
                                                    <h6 class="text-white mt-2 m-0">Pending</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6 col-xl"> 
                                    <div class="card">
                                        <div class="card-body bg-primary">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4 text-white"><?=$CountOrdersPickedUp?></span>      
                                                    <h6 class="text-white mt-2 m-0">Picked up</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6 col-xl"> 
                                    <div class="card bg-success">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4 text-white"><?=$CountOrdersDelivered?></span>      
                                                    <h6 class="text-white mt-2 m-0">Delivered</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6 col-xl"> 
                                    <div class="card bg-danger">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h4 text-white"><?=$CountOrdersCanceled?></span>      
                                                    <h6 class="text-white mt-2 m-0">Cancelled</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-->                     
                                </div><!--end col-->                                
                            </div>
                            <br/>
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="card-title text-white">ORDER LIST</h4>
                    <p class="text-muted mb-0">Datatable</p>
                    </div><!--end card-header-->
                    
                    <div class="card-body">  
                    <!-- <table id="CustomerList" width="100%" class="table table-striped table-bordered dataTable mb-0  table-responsive">-->
                        <div>
                            <table id="OrderList" class="table table-bordered table-hover" style="width:100%" >
                            <thead>
                               <tr class="bg-light ">
                               <th class="text-center">Order #</th>
                                    <th class="text-center">Options</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Debemos</th>
                                    <th class="text-center">Nos deben</th>
                                    <th class="text-center">Customer Origin</th>
                                    <th class="text-center">Origin Phone1</th>
                                    <th class="text-center">Customer Destination</th>
                                    <th class="text-center">Destination Phone1</th>
                                    <th class="text-center">Order Date</th>
                                    <th class="text-center">PickUp Date</th>
                                    <th class="text-center">Delivery Date</th>
                                    <th class="text-center">Origin City</th>
                                    <th class="text-center">Destination City</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Deposit</th>
                                    <th class="text-center">Extra Truker Fee</th>
                                    <th class="text-center">Truker Owes Us</th>
                                    <th class="text-center">Earnings</th>
                                    <th class="text-center">Cod</th>
                                    <th class="text-center">Trucker Rate</th>
                            </tfoot>
                                </tr>
                            </thead>
                            <tfoot>
                                     <th class="text-center">Order #</th>
                                    <th class="text-center">Options</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Debemos</th>
                                    <th class="text-center">Nos deben</th>
                                    <th class="text-center">Customer Origin</th>
                                    <th class="text-center">Origin Phone1</th>
                                    <th class="text-center">Destination</th>
                                    <th class="text-center">Destination Phone1</th>
                                    <th class="text-center">Order Date</th>
                                    <th class="text-center">PickUp Date</th>
                                    <th class="text-center">Delivery Date</th>
                                    <th class="text-center">Origin City</th>
                                    <th class="text-center">Destination City</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Deposit</th>
                                    <th class="text-center">Extra Truker Fee</th>
                                    <th class="text-center">Truker Owes Us</th>
                                    <th class="text-center">Earnings</th>
                                    <th class="text-center">Cod</th>
                                    <th class="text-center">Trucker Rate</th>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
<div class="modal fade" id="ModalChangeStatus" role="dialog" aria-labelledby="ModalChangeStatusLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title m-0" id="ModalChangeStatusLabel"> <i class="fas fa-car me-2"></i> Change status order</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">

                                      <div class="col-md-12" >
                                            <label class="mb-1"><b>Order ID</b></label>
                                            <input type="text" id="Id" readonly class="form-control">
                                        </div><br>
                                                    
                                    <div class="col-md-12" >
                                            <label class="mb-1"><b>Order status</b><b class="text-danger">*</b></label>
                                            <select style="width: 100%;" id="OrderStatusID" name="OrderStatusID" class="form-control">
                                                <option selected value="">Select a status</option>
                                                <?php foreach($OrderStatusList  as $key => $value): ?>
                                                <option value="<?= $value['Id']; ?>"> <?= $value['Status']; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                 </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end modal-body-->
            <div class="modal-footer">
                <button type="button" onclick="UpdateStatusOrder()" class="btn btn-soft-primary btn-sm">Update order</button>
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<script src="assets/js/bootstrap.min.js"></script>
<script>

 let datatable = "";
  
$(document).ready(function() {

    $("body").addClass("enlarge-menu");
    $.noConflict();

    $('#OrderList tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search by '+title+'" />' );
    } );
 
   
datatable = $('#OrderList').DataTable({
    "language": {
            "decimal": ",",
            "thousands": "."
        },
    initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that.search(this.value).draw();
                    }
                } );
            } );
        },
        "autoWidth": true,
        scrollX:        true,
        scrollCollapse: true,
       dom: 'Bfrtip',
       buttons: [{
            extend: 'copy',
            text: 'Copy to clipboard'
        },{
            extend: 'excel',
            filename: 'Order List'
        },{
            extend: 'pdf',
            filename: 'Order List'
        }
    ],
      "bDestroy": true,
            "ajax": {
                "url": "index.php?c=Orders&a=List",
            },
        columns:[
            {data: "Id"},
            {data: "Id"},
            {data: "Status"},
            {data: "Debemos"},
            {data: "NosDeben"},
            {data: "CustomerOrigin"},
            {data: "CustomerOriginPhone1"},
            {data: "CustomerDestination"},
            {data: "CustomerDestinationPhone1"},
            {data: "OrderDate"},
            {data: "PickUpDate"},
            {data: "DeliveryDate"},
            {data: "OriginCity"},
            {data: "DestinationCity"},
            {data: "Total"},
            {data: "Deposit"},
            {data: "ExtraTrukerFee"},
            {data: "TrukerOwesUs"},
            {data: "Earnings"},
            {data: "Cod"},
            {data: "TrukerRate"},
            
        ],"columnDefs": [
            {
            "targets":1,
            "data": "Editar",
            "render": function ( data) {
                return '<center><a class="btn btn-primary btn-sm" title="View order" href="index.php?c=Orders&a=View&Id='+data+'"> <i class="ti-file"></i></a><a class="btn btn-warning btn-sm" href="index.php?c=Orders&a=Edit&Id='+data+'" title="Edit order"> <i class="ti-pencil"></i></a><button class="btn btn-dark btn-sm" onclick="ChangeStatus('+data+')"  title="Change status"> <i class="ti-new-window"></i></button></center>';
            }}, {
                "targets": 2,
                "render": function (data, type, row) {

                    switch (data) {

                            case 'Pending':
                                data = '<center><span class="badge badge-soft-warning px-2">'+data+'</span></center>'
                            break;

                            case 'Picked up':
                                data = '<center><span class="badge badge-soft-primary px-2">'+data+'</span></center>'
                            break;

                            case 'Delivered':
                                data = '<center><span class="badge badge-soft-success px-2">'+data+'</span></center>'
                            break;

                            case 'Cancelled':
                                data = '<center><span class="badge badge-soft-danger px-2">'+data+'</span></center>'
                            break;
                    
                        default:
                                data = '<center><span class="badge badge-soft-secondary px-2">'+data+'</span></center>'
                            break;
                    }

                    return data;
                }}, {
                "targets": 3,
                "render": function (data, type, row) {
                    return (data == "Yes" ?  '<center><span class="badge badge-soft-danger px-2">'+data+'</span></center>'  : '<center><span class="badge badge-soft-success px-2">'+data+'</span></center>')
         
                }},{
                "targets": 4,
                "render": function (data, type, row) {
                    return (data == "Yes" ?  '<center><span class="badge badge-soft-danger px-2">'+data+'</span></center>'  : '<center><span class="badge badge-soft-success px-2">'+data+'</span></center>')
         
                }} 
            ]
    });


});

function ChangeStatus(OrderID){
    $("#Id").val(OrderID);
    $("#ModalChangeStatus").modal('show'); 
}

function UpdateStatusOrder(){

    if($("#Id").val() != '' && $("#OrderStatusID").val() != ''){

    $.ajax({
        type: 'POST',
        url: "index.php?c=Orders&a=UpdateStatusOrder",
        data:{ Id: $("#Id").val(), "OrderStatusID": $("#OrderStatusID").val()}
     }).then(function(response) {

        if(response == 'true'){
            
            $(".toast-success").html("status order update");
            var myAlert = document.getElementById('toastSuccess');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
             $("#ModalChangeStatus").modal('hide'); 
             location.reload();
        }else{

            $(".toast-error").html("(!) error - Order update");
            var myAlert = document.getElementById('toastError');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();

         $("#ModalChangeStatus").modal('hide'); 
        }

     });
    }
}

</script>
