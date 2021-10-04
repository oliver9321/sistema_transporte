<br>

        <div class="row">
        <div class="col-md-12">

        <div class="row">
                                <div class="col-12 col-lg-6 col-xl"> 
                                    <div class="card">
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
                                                    <h6 class="text-white mt-2 m-0">Canceled</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-->                     
                                </div><!--end col-->                                
                            </div>
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="card-title text-white">ORDER LIST</h4>
                    <p class="text-muted mb-0">Datatable</p>
                    </div><!--end card-header-->
                    
                    <div class="card-body">  
                    <!-- <table id="CustomerList" width="100%" class="table table-striped table-bordered dataTable mb-0  table-responsive">-->
                        <div>
                            <table id="CustomersList" class="table table-bordered table-hover nowrap" style="width:100%" >
                            <thead>
                               <tr>
                                    <th>Order ID</th>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Customer Origin</th>
                                    <th>Customer Origin Phone1</th>
                                    <th>Customer Destination</th>
                                    <th>Customer Dest Phone1</th>
                                    <th>Order Date</th>
                                    <th>PickUp Date</th>
                                    <th>Delivery Date</th>
                                    <th>Origin City</th>
                                    <th>Destination City</th>
                                    <th>Total</th>
                                    <th>Deposit</th>
                                    <th>Extra Truker Fee</th>
                                    <th>Truker Owes Us</th>
                                    <th>Earnings</th>
                                    <th>Cod</th>
                                    <th>Trucker Rate</th>
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
    $("body").addClass("enlarge-menu");
    $.noConflict();
   
  var datatable = $('#CustomersList').DataTable({
            'responsive': true,
            "processing": true,
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
            
        ],"columnDefs": [{
            "targets":1,
            "data": "Editar",
            "render": function ( data) {
                return '<center><a class="btn btn-primary" href="index.php?c=Orders&a=View&Id='+data+'"> <i class="ti-file"></i></a><a class="btn btn-warning" href="index.php?c=Orders&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i></a></center>';
            }
        },
         {
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

                            case 'Canceled':
                                data = '<center><span class="badge badge-soft-danger px-2">'+data+'</span></center>'
                            break;
                    
                        default:
                                data = '<center><span class="badge badge-soft-secondary px-2">'+data+'</span></center>'
                            break;
                    }

                    return data;
                }   
                
         }]
    });

});

</script>
