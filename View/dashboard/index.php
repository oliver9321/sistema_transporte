
  <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Logistic Transport</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div><!--end col-->
                                 
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                <a href="index.php?c=Customers&a=Index">
                                    <div class="card report-card bg-dark">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Customers</p>
                                                    <h3 class="m-0 text-white"><?=$CountCustomers?></h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-dark-alt">
                                                        <i data-feather="user-plus" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                    </a>
                                </div> <!--end col--> 

                               
                                <div class="col-md-6 col-lg-3">
                                <a href="index.php?c=Orders&a=Index">
                                    <div class="card report-card bg-dark">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Orders</p>
                                                    <h3 class="m-0 text-white"><?=$CountOrders?></h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-dark-alt">
                                                        <i data-feather="shopping-cart" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                    </a>
                                </div> <!--end col--> 
                               

                                <div class="col-md-6 col-lg-3">
                                <a href="index.php?c=Payments&a=Index">
                                    <div class="card report-card bg-dark">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col">
                                                    <p class="text-white mb-0 fw-semibold">Earnings</p>
                                                    <h3 class="m-0 text-white"><?= $SumEarnings ?></h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-dark-alt">
                                                        <i data-feather="dollar-sign" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                    </div><!--end card--> 
                                    </a>
                                </div> <!--end col--> 

                                <div class="col-md-6 col-lg-3">
                                <a href="index.php?c=Drivers&a=Index">
                                    <div class="card report-card bg-dark">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col">  
                                                    <p class="text-white mb-0 fw-semibold">Drivers</p>                                         
                                                    <h3 class="m-0 text-white"><?=$CountDrivers ?></h3>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="report-main-icon bg-dark-alt">
                                                        <i data-feather="users" class="align-self-center text-muted icon-sm"></i>  
                                                    </div>
                                                </div> 
                                            </div>
                                        </div><!--end card-body--> 
                                        </a>
                                    </div><!--end card--> 
                                </div> <!--end col-->                               
                            </div><!--end row-->
                            <br>
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title text-white">Orders pending</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   This Month</i>
                                                </a>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                  
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive browser_users">
                                                    <table id="OrdersPending" class="table table-bordered table-hover" style="width:100%" >
                                                        <thead>
                                                        <tr class="bg-light">
                                                                <th></th>
                                                                <th class="text-center">Order ID</th>
                                                                <th class="text-center">Customer Origin</th>
                                                                <th class="text-center">PickUp Date</th>
                                                                <th class="text-center">Delivery Date</th>
                                                                <th class="text-center">Origin City</th>
                                                            </tr>
                                                        </thead>
                                                    </table>                                            
                                                </div><!--end /div-->
                                            </div><!--end card-body--> 
                                        </div><!--end card--> 
                                    </div> <!--end col--> 
                                  
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card"> 
                            <div class="row align-items-center">
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today
                                                </a>
                                            </div>               
                                        </div><!--end col-->                                      
                                    </div>  <!--end row--> 
                                <div class="card-body border-bottom-dashed">
                                    <div class="earning-data text-center">
                                        <img src="assets/images/money-beg.png" alt="" class="money-bag my-3" height="60">
                                        <h5 class="earn-money mb-1">$<?=$SumTotalToday?></h5>
                                        <p class="text-muted font-15 mb-4">Total in orders</p>
                                    </div>                                                                                                          
                                </div><!--end card-body-->
                                <div class="card-body my-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent align-self-center icon-md text-secondary me-2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0 font-20">$<?=$SumTrukerOwesUsToday?></h6>
                                                    <p class=" mb-0 text-danger">Loss</p>                                                                                                                                               
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center icon-md text-secondary me-2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0 font-20">$<?=$SumEarningsToday?></h6>
                                                    <p class="mb-0 text-success">Earnings</p>                                                                                          
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col-->                                         
                                    </div><!--end row-->  
                                </div><!--end card-body-->
                                                       
                                                             
                            </div><!--end card--> 

                            <br/>
                            <div class="card"> 
                            <div class="row align-items-center">
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   This Month
                                                </a>
                                            </div>               
                                        </div><!--end col-->                                      
                                    </div>  <!--end row--> 
                                <div class="card-body border-bottom-dashed">
                                    <div class="earning-data text-center">
                                        <img src="assets/images/money-beg.png" alt="" class="money-bag my-3" height="60">
                                        <h5 class="earn-money mb-1">$<?=$SumTotal?></h5>
                                        <p class="text-muted font-15 mb-4">Total <?=date('M')?></p>
                                    </div>                                                                                                          
                                </div><!--end card-body-->
                                <div class="card-body my-1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent align-self-center icon-md text-secondary me-2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0 font-20">$<?=$SumTrukerOwesUs?></h6>
                                                    <p class=" mb-0 text-danger">Loss</p>                                                                                                                                               
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col">
                                            <div class="media">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center icon-md text-secondary me-2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="m-0 font-20">$<?=$SumEarnings?></h6>
                                                    <p class="mb-0 text-success">Earnings</p>                                                                                          
                                                </div><!--end media body-->
                                            </div>
                                        </div><!--end col-->                                         
                                    </div><!--end row-->  
                                </div><!--end card-body-->
                                                       
                                                             
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        
                    </div><!--end row-->
  
                    
<script>

 $(document).ready(function() {

    $.noConflict();
   
 $('#OrdersPending').DataTable({
      'responsive': true,
        dom: 'Bfrtip',
      "bDestroy": true,
            "ajax": {
                "url": "index.php?c=Orders&a=OrderPending",
            },
        columns:[
            {data: "Id"},
            {data: "Id"},
            {data: "CustomerOrigin"},
            {data: "PickUpDate"},
            {data: "DeliveryDate"},
            {data: "DestinationCity"}
        ],"columnDefs": [{
            "targets":0,
            "data": "Editar",
            "render": function ( data) {
                return '<center><a class="btn btn-primary" title="View order" href="index.php?c=Orders&a=View&Id='+data+'"><i class="ti-file"></i></a></center>';
            }},
            {
            "targets":1,
            "data": "Id",
            "render": function ( data) {
                return '<center>'+data+'</center>';
            }
        }]
    });



});
</script>
