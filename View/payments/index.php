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
                             <th>Payment ID</th>
                             <th>Order ID</th>                           
                            <th>Customer</th>
                            <th>Company</th>                           
                            <th>Driver</th>
                            <th>Order date</th>  
                            <th class="sum">Total</th>  
                            <th class="sum">Deposit</th>  
                            <th class="sum">Extra trucker fee</th>  
                            <th class="sum">Trucker owes us</th>  
                            <th class="sum">Earnings</th>  
                            <th>Card holder name</th>  
                            <th>Credit card</th>
                            <th>Exp date</th>
                            <th>Cvv</th>
                            <th>Payment note</th>
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
                            <th class=" font-weight-bold">Totals:</th>  
                            <th class=""></th>  
                            <th class=""></th>  
                            <th class="text-warning font-weight-bold"></th>  
                            <th class="text-danger font-weight-bold"></th>  
                            <th class="text-success font-weight-bold"></th>  
                            <th></th>  
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                   </table>
            </div>
        </div>
    </div> <!-- end col -->
 </div> <!-- end row -->

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
            console.log(sum); //alert(sum);
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
