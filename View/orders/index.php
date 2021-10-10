<br>

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
                                                    <h6 class="text-white mt-2 m-0">Canceled</h6>                
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
                            <table id="CustomersList" class="table table-bordered table-hover" style="width:100%" >
                            <thead>
                               <tr class="bg-light ">
                               <th>Order ID</th>
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
                                     <th>Order ID</th>
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

<script>

 let datatable = "";
  
$(document).ready(function() {
    $("body").addClass("enlarge-menu");
    $.noConflict();


    $('#CustomersList tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Buscar por '+title+'" />' );
    } );
 
   
datatable = $('#CustomersList').DataTable({
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
                return '<center><a class="btn btn-secondary" href="index.php?c=Orders&a=View&Id='+data+'"> <i class="ti-file"></i></a><a class="btn btn-warning" href="index.php?c=Orders&a=Edit&Id='+data+'" aria-label="Editar"> <i class="ti-pencil"></i></a></center>';
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

                            case 'Canceled':
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

</script>
