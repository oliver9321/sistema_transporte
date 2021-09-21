</div>
<!-- container -->

<footer class="footer text-center text-sm-start">
    &copy;
    <script>
    document.write(new Date().getFullYear())
    </script> Logistics Transport - <span class="text-danger">develop mode</span><span
        class="text-muted d-none d-sm-inline-block float-end">developed by
        <i class="mdi mdi-heart text-danger"></i>devsarrollando.org</span>
</footer>
<!--end footer-->
</div>
<!-- end page content -->

<div class="modal fade bd-example-modal-xl" id="bd-example-modal-xl" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Order management</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalDefault"><i class="fas fa-user-plus me-2"></i>New
                            customer</button>
                        <!--  <h4 class="card-title">Jquery Steps Wizard</h4>
                                                            <p class="text-muted mb-0">A powerful jQuery wizard plugin that supports accessibility and HTML5</p>-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">

                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                            <h3>Basic info</h3>
                            <fieldset>

                                <div class="row">

                                    <div class="col-md-6">
                                        <span class="text-dark"><b><i data-feather="map-pin"></i> Origin Information</b></span>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Origin customer name</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Input the customer's origin name"  name="IdCustomerOrigin" id="IdCustomerOrigin">
                                                <button class="btn btn-dark" type="button" id="SearchCustomerName"><i class="fas fa-search"></i></button>
                                            </div>
                                            </div><!-- end row -->
                                            
                                        </div><br>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <span class="text-dark"><b><i data-feather="arrow-right-circle"></i> Destination
                                                Information</b></span>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Destination customer name</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Input the customer's destination name"  name="IdCustomerDestination" id="IdCustomerDestination">
                                                <button class="btn btn-dark" type="button" id="SearchDestinationCustomer"><i class="fas fa-search"></i></button>
                                            </div>

                                        </div><br>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-->

                                </div>
                                <!--end row-->

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Origin address</label>
                                                <input id="OriginAddress" name="OriginAddress" type="text"
                                                    class="form-control" placeholder="Ex. 12141 Pembroke Rd,...">
                                            </div><!-- end row -->
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Origin city</label>
                                                        <input id="OriginCity" name="OriginCity" type="text"
                                                            class="form-control" placeholder="City">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Origin state</label>
                                                        <input id="OriginState" name="OriginState" type="text"
                                                            class="form-control" placeholder="State">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Origin zip code</label>
                                                        <input id="OriginZip" name="OriginZip" type="text"
                                                            class="form-control" placeholder="00000">
                                                    </div><!-- end row -->
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone #1</label>
                                                        <input id="OriginPhone1" name="OriginPhone1" type="tel"
                                                            class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone #2</label>
                                                        <input id="OriginPhone2" name="OriginPhone2" type="tel"
                                                            class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Origin email</label>
                                                     <input id="OriginEmail" name="OriginEmail" type="email" class="form-control" placeholder="cus@domain.com">
                                                     </div><!-- end row -->

                                                </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Origin note</label>
                                                <textarea id="OriginNote" name="OriginNote" class="form-control"
                                                    placeholder="Opcional information"></textarea>
                                            </div><!-- end row -->
                                        </div><br>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Destination address</label>
                                                <input id="DestinationAddress" name="DestinationAddress" type="text" class="form-control" placeholder="Ex. 1600 Pennsylvania...">
                                            </div><!-- end row -->
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Destination city</label>
                                                        <input id="DestinationCity" name="DestinationCity" type="text" class="form-control" placeholder="City">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Destination state</label>
                                                        <input id="DestinationState" name="DestinationState" type="text" class="form-control" placeholder="State">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Destination zip code</label>
                                                        <input id="DestinationZip" name="DestinationZip" type="text" class="form-control" placeholder="00000">
                                                    </div><!-- end row -->
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone #1</label>
                                                        <input id="DestinationPhone1" name="DestinationPhone1" type="tel"
                                                            class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone #2</label>
                                                        <input id="DestinationPhone2" name="DestinationPhone2" type="tel"
                                                            class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                <label class="mb-1">Destination email</label>
                                                <input id="DestinationEmail" name="DestinationEmail" type="email"  class="form-control" placeholder="cus@domain.com">
                                            </div><!-- end row -->
                                                </div>
                                            </div>
                                        </div><br>

                               
                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Destination note</label>
                                                <textarea id="DestinationNote" name="DestinationNote" class="form-control"
                                                    placeholder="Opcional information"></textarea>
                                            </div><!-- end row -->
                                        </div><br>
                                    </div>

                                </div>

                            </fieldset>
                            <!--end fieldset-->

                            <h3>Vehicles</h3>
                            <fieldset>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6" style="position: relative;">
                                                                 <label class="mb-1"><b>Pick up date</b></label>
                                                                 <input id="PickUpDate" name="PickUpDate" type="date"  class="form-control">
                                                            </div> <!-- end row -->

                                                            <div class="col-md-6" style="position: relative;">
                                                                 <label class="mb-1"><b>Delivery date</b></label>
                                                                 <input id="DeliveryDate" name="DeliveryDate" type="date"  class="form-control">
                                                            </div> <!-- end row -->

                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6" style="position: relative;">
                                                                    <label class="mb-1"><b>Order date</b></label>
                                                                    <input id="PickUpOrderDateDate" name="OrderDate" type="date"  class="form-control">
                                                                </div> <!-- end row -->

                                                                <div class="col-md-6" style="position: relative;">
                                                                    <label class="mb-1"><b>Order status</b></label>
                                                                    <input id="OrderStatusID" name="OrderStatusID" type="text"  class="form-control" placeholder="Open">
                                                                </div> <!-- end row -->

                                                            </div>
                                                        </div>
                                                    </div><br>            
                                            </div>

                                            <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <p class="text-muted mb-0">
                                                            <span data-repeater-create="" class="btn btn-sm btn-outline-primary">
                                                                                        <span class="fas fa-plus"></span> 
                                                                        </span>    
                                                            <b class="text-dark">Add vehicles to order</b></p>
                                                        </div>
                                                        <!--end card-header-->
                                                        <div class="card-body">
                                                            <div class="repeater-default">
                                                                <div data-repeater-list="car">
                                                                
                                                                    <div data-repeater-item="">
                                                                        
                                                                        <div class="form-group row d-flex align-items-end">

                                                                            <div class="row">

                                                                                <div class="col-md-12">
                                                                                
                                                                                    <div class="row">

                                                                                        <div class="col-sm-2" style="position: relative;">
                                                                                            <label class="mb-1">Brand</label>
                                                                                            <select name="Brand" id="Brand" class="form-select">
                                                                                                            <option value="volkswagon" selected="">Volkswagon</option>
                                                                                                            <option value="honda">Honda</option>
                                                                                                            <option value="ford">Ford</option>
                                                                                                        </select>
                                                                                        </div><!-- end row -->

                                                                                        <div class="col-sm-2" style="position: relative;">
                                                                                            <label class="mb-1">Model</label>
                                                                                            <select  id="Model" name="Model" class="form-select">
                                                                                                    <option value="volkswagon" selected="">Volkswagon</option>
                                                                                                    <option value="honda">Honda</option>
                                                                                                    <option value="ford">Ford</option>
                                                                                                </select>
                                                                                        </div><!-- end row -->

                                                                                        <div class="col-sm-2" style="position: relative;">
                                                                                            <label class="mb-1">Color</label>
                                                                                            <input type="text" name="Color" id="Color" value="Beetle" class="form-control">
                                                                                        </div> <!--end col-->

                                                                                        <div class="col-sm-1" style="position: relative;">
                                                                                            <label class="mb-1">Year</label>
                                                                                            <input type="tel" name="Year" id="Year"  class="form-control" placeholder="<?=date("Y") ?>">
                                                                                        </div> <!--end col--> 

                                                                                        <div class="col-sm-4" style="position: relative;">
                                                                                             <label class="mb-1">Vin</label>
                                                                                            <input type="text" name="Vin" id="Vin"  class="form-control">
                                                                                        </div>

                                                                                        <div class="col-sm-1" style="position: relative;">
                                                                                        <br>
                                                                                            <button type="button" data-repeater-delete="" class="btn btn-outline-danger">
                                                                                                    <span class="far fa-trash-alt me-1"></span> 
                                                                                            </button>
                                                                                        </div> <!--end col-->

                                                                                    </div><br>

                                                                                </div>

                                                                            </div>

                                                                            <!--end col-->
                                                                        </div>
                                                                        <!--end row-->
                                                                    </div>
                                                                    <!--end /div-->
                                                                </div>
                                                                <!--end repet-list-->

                                                            </div>
                                                            <!--end repeter-->
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                             </div>
                                     </div>
                             </fieldset>
                            <!--end fieldset-->


                            <h3>Payment</h3>
                            <fieldset>

                                <div class="row">

                                    <div class="col-md-6">
                                        <span class="text-dark"><b><i data-feather="credit-card"></i> Credit Card info</b></span>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Card holder name</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Input the name of card"  name="CardHolderName" id="CardHolderName">
                                                <button class="btn btn-dark" type="button" id="SearchCardHolderName"><i class="fas fa-search"></i></button>
                                            </div>
                                            </div><!-- end row -->
                                            
                                        </div><br>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-6">
                                        <span class="text-dark"><b><i data-feather="dollar-sign"></i> Payment</b></span>
                                        <hr>

                                        <div class="row">

                                            <div class="col-md-6" style="position: relative;">
                                                <label class="mb-1">Total</label>
                                                <input type="number" class="form-control" name="Total" id="Total" placeholder="$0000">
                                            </div>

                                            <div class="col-md-6" style="position: relative;">
                                                 <label class="mb-1">Deposit</label>
                                                 <input id="Deposit" name="Deposit" type="number" class="form-control" placeholder="$0000">
                                            </div> <!-- end row -->

                                        </div><br>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-->

                                </div>
                                <!--end row-->

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-5" style="position: relative;">
                                                <label class="mb-1">Credit card number</label>
                                                <input id="CreditCard" name="CreditCard" type="text"  class="form-control" placeholder="#### #### #### ####">
                                                </div> <!-- end row -->

                                                <div class="col-md-3" style="position: relative;">
                                                    <label class="mb-1">Expiration date</label>
                                                    <input id="ExpDate" name="ExpDate" type="text" class="form-control" placeholder="00/00">
                                                </div> <!-- end row -->

                                                <div class="col-md-4" style="position: relative;">
                                                    <label class="mb-1">CVV</label>
                                                    <input id="Cvv" name="Cvv" type="text" class="form-control" placeholder="000">
                                                </div><!-- end row -->
                                                </div>
                                            </div>
                                        </div><br>
                                      
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-8" style="position: relative;">
                                                    <label class="mb-1">Biling address</label>
                                                    <input id="BilingAddress" name="BilingAddress" type="text"  class="form-control" placeholder="Ex. 12141 Pembroke Rd....">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Reference</label>
                                                        <input id="Reference" name="Reference" type="text" class="form-control" placeholder="0000000">
                                                    </div> <!-- end row -->

                                                 </div>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #1</label>
                                                        <input id="Tel1" name="Tel1" type="tel" class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div> <!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #2</label>
                                                        <input id="Tel2" name="Tel2" type="tel" class="form-control" placeholder="+1 (555) 555-5555">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Email</label>
                                                        <input id="PaymentEmail" name="PaymentEmail" type="email" class="form-control" placeholder="ez@domain.com">
                                                    </div><!-- end row -->
                                                </div>

                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Payment Note</label>
                                                <textarea id="PaymentNote" name="PaymentNote" class="form-control" placeholder="Opcional information"></textarea>
                                            </div><!-- end row -->
                                        </div><br>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                  
                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Extra truker Fee</label>
                                                        <input id="ExtraTrukerFee" name="ExtraTrukerFee" type="number" class="form-control" placeholder="$0000">
                                                    </div><!-- end row -->


                                                    <div class="col-md-4" style="position: relative;">
                                                        <label class="mb-1">Cod</label>
                                                        <input id="Cod" name="Cod" type="number" class="form-control" placeholder="$0000">
                                                    </div><!-- end row -->

                                                    <div class="col-md-4" style="position: relative;">
                                                            <label class="mb-1">Truker rate</label>
                                                            <input id="TrukerRate" name="TrukerRate" type="number" class="form-control" placeholder="$0000">
                                                    </div> <!-- end row -->
                                            
                                                </div>
                                            </div>
                                        </div><br>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                            
                                                    <div class="col-md-4" style="position: relative;">
                                                            <label class="mb-1">Earnings</label>
                                                            <input id="Earnings" name="Earnings" type="number" class="form-control" placeholder="$0000">
                                                    </div><!-- end row -->

                                                </div>
                                            </div>
                                        </div><br>

                                    </div>

                                </div>

                            </fieldset>
                            <!--end fieldset-->

                            <h3>Trucker and Drivers</h3>
                            <fieldset>
                            <div class="row">

                                <div class="col-md-6">
                                    <span class="text-dark"><b><i data-feather="truck"></i> Trucker company</b></span>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" style="position: relative;">
                                            <label class="mb-1">Trucker's company name</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Input the company service's name"  name="CompanyName" id="CompanyName">
                                            <button class="btn btn-dark" id="SearchCompanyName" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                             </div>
                                        </div><!-- end row -->
                                        
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-md-6">
                                    <span class="text-dark"><b><i data-feather="users"></i> Drivers</b></span>
                                    <hr>

                                    <div class="row">

                                        <div class="col-md-12" style="position: relative;">
                                            <label class="mb-1">Driver's name</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Input the driver's name"  name="DriverName" id="DriverName">
                                            <button class="btn btn-dark" id="SearchDriverName" type="button"><i class="fas fa-search"></i></button>
                                             </div>
                                        </div><!-- end row -->

                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="row">

                                                <div class="col-md-12" style="position: relative;">
                                                <label class="mb-1">Company's address</label>
                                                <input id="CompanyAddress" name="CompanyAddress" type="text"  class="form-control" placeholder="Input the company's address">
                                                </div> <!-- end row -->
                                
                                            </div>
                                        </div>
                                    </div><br>
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="col-md-4" style="position: relative;">
                                                    <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #1</label>
                                                    <input id="CompanyPhone1" name="CompanyPhone1" type="tel" class="form-control" placeholder="+1 (555) 555-5555">
                                                </div> <!-- end row -->

                                                <div class="col-md-4" style="position: relative;">
                                                    <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
                                                    <input id="CompanyPhone2" name="CompanyPhone2" type="tel" class="form-control" placeholder="+1 (555) 555-5555">
                                                </div><!-- end row -->

                                                
                                                <div class="col-md-4" style="position: relative;">
                                                    <label class="mb-1">Email</label>
                                                    <input id="CompanyEmail" name="CompanyEmail" type="email" class="form-control" placeholder="ez@domain.com">
                                                </div><!-- end row -->

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                            
                                                <div class="col-md-6" style="position: relative;">
                                                    <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #1</label>
                                                    <input id="DriverPhone1" name="DriverPhone1" type="number" class="form-control" placeholder="+1 (555) 555-5555">
                                                </div><!-- end row -->


                                                <div class="col-md-6" style="position: relative;">
                                                    <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
                                                    <input id="DriverPhone2" name="DriverPhone2" type="number" class="form-control" placeholder="+1 (555) 555-5555">
                                                </div><!-- end row -->

                                        
                                            </div>
                                        </div>
                                    </div><br>

                                </div>

                            </div>

                    </fieldset>
                            <!--end fieldset-->

                            <h3>Confirm Order</h3>
                            <fieldset>
                                <div class="p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <!--end fieldset-->

                        </form>
                        <!--end form-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->

            </div>
            <!--end modal-body-->
            <!--<div class="modal-footer">
                <button type="button" class="btn btn-soft-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>-->
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<div class="modal fade" id="exampleModalDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title m-0" id="exampleModalDefaultLabel"> <i class="fas fa-user-plus me-2"></i> New
                    customer</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-body">

                            <div class="mb-1">
                                <label for="IdCustomerType" class="text-danger">*Customer type:</label>
                                <select style="width: 100%;" id="IdCustomerType" name="IdCustomerType"
                                    class="select2 form-control custom-select">
                                    <option value="" selected>Select customer type</option>
                                    <?php foreach($CustomerTypeList  as $key => $value): ?>
                                    <option value="<?= $value['Id']; ?>"><?= $value['NameType']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-danger" for="Name">*Name:</label>
                                <input class="form-control" type="text" id="Name" name="Name">
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="LastName">Last name:</label>
                                <input class="form-control" type="text" id="LastName" name="LastName">
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-danger" for="Phone1">*Phone #1</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="Phone1" name="Phone1"
                                        placeholder="+123456789" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="Phone2">Phone #2</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="Phone2" name="Phone2"
                                        placeholder="+123456789" aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="Phone2">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="las la-at"></i></span>
                                    <input type="email" class="form-control" id="Email" name="Email"
                                        placeholder="oliver@domain.com" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end modal-body-->
            <div class="modal-footer">
                <button type="button" onclick="newCustomer()" class="btn btn-soft-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>


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



</div>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metismenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/simplebar.min.js"></script>
<script src="assets/js/moment.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/jquery-steps/jquery.steps.min.js"></script>
<script src="assets/pages/jquery.form-wizard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/orders.js"></script>

<script>
$(document).ready(function() {
    $(".select2").select2();
});
</script>`

</body>

</html>