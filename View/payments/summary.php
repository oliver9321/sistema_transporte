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
   <div class="col-12">
      <div class="card">
          <div class="card-header bg-dark">
              <h4 class="card-title text-white">Payments LIST</h4>
               <p class="text-muted mb-0">Datatable</p>
            </div><!--end card-header-->
            
            <div class="card-body">  
                <table id="PaymentsList" width="100%" class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-light">
                             <th class="text-center">View/Pay</th>
                             <th>Payment ID</th>
                             <th>Order ID</th>                           
                            <th>Customer</th>
                            <th>Company</th>                           
                            <th>Driver</th>
                            <th>Order date</th>  
                            <th class="sum">Total</th>  
                            <th class="sum">Deposit</th>  
                            <th class="sum">Extra truker fee</th>  
                            <th class="sum">Truker owes us</th>  
                            <th class="sum">Earnings</th>  
                        </tr>
                     </thead>
                     <tbody></tbody>
                     <tfoot>
                     <tr class="bg-light">
                            <th></th>
                            <th></th>
                            <th></th>                           
                            <th></th>
                            <th></th>                           
                            <th></th>
                            <th class=" font-weight-bold">Totals:</th>  
                            <th class=""></th>  
                            <th class=""></th>  
                            <th class="text-warning font-weight-bold"></th>  
                            <th class="text-danger font-weight-bold"></th>  
                            <th class="text-success font-weight-bold"></th>  
                        </tr>
                    </tfoot>
                   </table>
            </div>
        </div>
    </div> <!-- end col -->
 </div> <!-- end row -->

 <div class="modal" id="ModalMarkPaid" role="dialog" aria-labelledby="ModalMarkPaidLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h6 class="modal-title m-0" id="ModalMarkPaidLabel"> <i class="fas fa-car me-2"></i> Mark as paid</h6>
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
                                            <label class="mb-1"><b>Mark as paid</b><b class="text-danger">*</b></label>
                                            <select style="width: 100%;" id="FieldSelected" name="FieldSelected" class="form-control">
                                                <option selected value="">Select an option</option>
                                                <option value="ExtraTruckerFee">Extra Trucker Fee</option>
                                                <option value="TruckerOwesUS">Trucker Owes US</option>
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
                <button type="button" onclick="PayOrder()" class="btn btn-soft-primary btn-sm">Pay</button>
            </div>
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<script src="assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $.noConflict();
    $('#PaymentsList').DataTable({
        "footerCallback": function(row, data, start, end, display) {
        var api = this.api();
        
        api.columns('.sum', {
            page: 'current'
        }).every(function() {
            var sum = this
            .data()
            .reduce(function(a, b) {
                var x = parseFloat(a) || 0;
                var y = parseFloat(b) || 0;
                return x + y;
            }, 0);
          
            $(this.footer()).html(sum);
        });
        },
        "language": {
            "decimal": ",",
            "thousands": "."
        },
        "responsive": true,
            "ajax": {
                "url": "index.php?c=Payments&a=View",
            },
                dom: 'Bfrtip',
                buttons: [{
                extend: 'copy',
                text: 'Copy to clipboard'
            },{
                extend: 'excel',
                filename: 'Order Status List'
            },{
                extend: 'pdf',
                filename:  'Order Status List'
            }
        ],
        columns:[
            {data: "OrderID"},
            {data: "PaymentID"},
            {data: "OrderID"},
            {data: "Name"},
            {data: "CompanyName"},
            {data: "DriverName"},
            {data: "OrderDate"},
            {data: "Total"},
            {data: "Deposit"},
            {data: "ExtraTrukerFee"},
            {data: "TrukerOwesUs"},
            {data: "Earnings"}
        ],"columnDefs": [
            {
            "targets":0,
            "data": "OrderID",
            "render": function ( data) {
                return '<center><a class="btn btn-primary btn-sm" title="View order" href="index.php?c=Orders&a=View&Id='+data+'"> <i class="ti-file"></i></a> | <button class="btn btn-success btn-sm" onclick="ChangeStatus('+data+')"  title="Change status"> <i class="fa fa-money-bill"></i></button></center>';
            }}]
    });

});

function ChangeStatus(OrderID){
    $("#Id").val(OrderID);
    $("#ModalMarkPaid").modal('show'); 
}

function PayOrder(){

    if($("#Id").val() != '' && $("#FieldSelected").val() != ''){

    $.ajax({
        type: 'POST',
        url: "index.php?c=Orders&a=PayOrder",
        data:{ Id: $("#Id").val(), "FieldSelected": $("#FieldSelected").val()}
     }).then(function(response) {

        console.log(response);

        if(response == 'true' || response == true){
            
            $(".toast-success").html("Paid order !");
            var myAlert = document.getElementById('toastSuccess');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
           
        }else{

            $(".toast-error").html("(!) error - Order update");
            var myAlert = document.getElementById('toastError');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();

        
        }
        $("#ModalMarkPaid").modal('hide'); 
        location.reload();

     });
    }
}
</script>
