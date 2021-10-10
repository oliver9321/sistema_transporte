<br>

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
                             <th>#</th>
                             <th>Order ID</th>                           
                            <th>Customer</th>
                            <th>Company</th>                           
                            <th>Driver</th>
                            <th>Order date</th>  
                            <th>Total</th>  
                            <th>Deposit</th>  
                            <th>Extra truker fee</th>  
                            <th>Truker owes us</th>  
                            <th>Earnings</th>  
                            <th>Card holder name</th>  
                            <th>Credit card</th>
                            <th>Exp date</th>
                            <th>Cvv</th>
                            <th>Payment note</th>
                        </tr>
                     </thead>
                   </table>
            </div>
        </div>
    </div> <!-- end col -->
 </div> <!-- end row -->

<script>
$(document).ready(function() {
    $.noConflict();
    $('#PaymentsList').DataTable({
        "responsive": true,
            "ajax": {
                "url": "index.php?c=Payments&a=View",
            },
        columns:[
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
            {data: "Earnings"},
            {data: "CardHolderName"},
            {data: "CreditCard"},
            {data: "ExpDate"},
            {data: "Cvv"},
            {data: "PaymentNote"}
        ]
    });

});
</script>
