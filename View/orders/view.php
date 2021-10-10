<br>
<style>
    .modal-body {
    padding: 0.2rem !important;
}
</style>


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


<span class="text-dark"><h4>Order # <?= $Order->Id ?></h4></span>
<div class="modal-body d-print-non">
    <div class="card">
   <!-- <a href="javascript:window.print()" class="d-print-none btn btn-info"><i class="fa fa-print"></i> Print</a> -->
        <!--end card-header-->
        <div class="card-body">
            <form id="form-horizontal" class="form-horizontal">
                <input type="text" name="Id" id="Id" value="<?=$Order->Id?>" hidden>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="map-pin"></i> Origin information</b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12" >
                                <label class="mb-1"><i class="fa fa-user"></i> Origin customer name<b class="text-danger">*</b></label>
                                    <div class="input-group">
                                        <select style="width: 100%;" id="IdCustomerOrigin" name="IdCustomerOrigin" class="select2 form-control mb-3 custom-select originInput" readonly> </select>
                                    </div>
                                </div>
                            </div><!-- end row -->
                            <br>
                        </div>
                        <!--end col-->
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="arrow-right-circle"></i>
                                    Destination information</b></span>
                            <hr>
                            <div class="row">

                                <div class="col-md-12" >
                                <label class="mb-1"><i class="fa fa-user"></i> Destination customer name<b class="text-danger">*</b></label>
                                    <div class="input-group">
                                        <select style="width: 100%;" id="IdCustomerDestination" name="IdCustomerDestination" class="select2 form-control mb-3 custom-select DestinationInput" readonly> </select>
                                    </div>
                                </div>
                                <br>
                                <!--end form-group-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12" >
                                    <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin address<b class="text-danger">*</b></label>
                                        <input style="display:none;" />
                                        <input id="OriginAddress" name="OriginAddress" type="text" class="form-control originInput" placeholder="Ex. 12141 Pembroke Rd,..."  readonly>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin city<b class="text-danger">*</b></label>
                                                <input style="display:none;" />
                                                <input autocomplete="off" id="OriginCity" name="OriginCity" type="text"
                                                    class="form-control originInput" placeholder="City" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin state<b class="text-danger">*</b></label>
                                                <input style="display:none;" />
                                                <input autocomplete="off" id="OriginState" name="OriginState" type="text"
                                                    class="form-control originInput" placeholder="State" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin zip code</label>
                                                <input style="display:none;" />
                                                <input autocomplete="off" id="OriginZip" name="OriginZip" type="text"
                                                    class="form-control originInput" placeholder="00000" readonly>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                        <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-mobile"></i> Origin phone
                                                    #1<b class="text-danger">*</b></label>
                                                <input id="OriginPhone1" name="OriginPhone1" type="tel"
                                                    class="form-control originInput phone" placeholder="(555) 555-5555" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone
                                                    #2</label>
                                                    <input style="display:none;" />
                                                <input autocomplete="off" id="OriginPhone2" name="OriginPhone2" type="tel"
                                                    class="form-control originInput phone" placeholder="(555) 555-5555" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-envelope"></i> Origin email</label>
                                                <input style="display:none;" />
                                                <input autocomplete="off" id="OriginEmail" name="OriginEmail" type="email"
                                                    class="form-control originInput" placeholder="cus@domain.com" readonly>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label class="mb-1"><i class="fa fa-sticky-note"></i> Origin note</label>
                                        <textarea id="OriginNote" name="OriginNote" class="form-control originInput"
                                            placeholder="Opcional information" rows="3" readonly></textarea>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination
                                        address<b class="text-danger">*</b></label>
                                            <input style="display:none;" />
                                        <input id="DestinationAddress" name="DestinationAddress" type="text" class="form-control DestinationInput" placeholder="Ex. 1600 Pennsylvania..." readonly>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination city<b class="text-danger">*</b></label>
                                                <input id="DestinationCity" name="DestinationCity" type="text"
                                                    class="form-control DestinationInput" placeholder="City" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination state<b class="text-danger">*</b></label>
                                                <input id="DestinationState" name="DestinationState" type="text"
                                                    class="form-control DestinationInput" placeholder="State" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination zip code</label>
                                                <input id="DestinationZip" name="DestinationZip" type="text"
                                                    class="form-control DestinationInput" placeholder="00000" readonly>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-mobile"></i> Destination phone
                                                #1<b class="text-danger">*</b></label>
                                                <input id="DestinationPhone1" name="DestinationPhone1" type="tel"
                                                    class="form-control DestinationInput phone"
                                                    placeholder="(555) 555-5555" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone
                                                    #2</label>
                                                <input id="DestinationPhone2" name="DestinationPhone2" type="tel"
                                                    class="form-control DestinationInput phone"
                                                    placeholder="(555) 555-5555" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-envelope"></i> Destination email</label>
                                                <input id="DestinationEmail" name="DestinationEmail" type="email"
                                                    class="form-control DestinationInput" placeholder="cus@domain.com" readonly>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label class="mb-1"><i class="fa fa-sticky-note"></i> Destination note</label>
                                        <textarea id="DestinationNote" name="DestinationNote"
                                            class="form-control DestinationInput"
                                            placeholder="Opcional information" rows="3" readonly></textarea>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                            </div>
                        </div>
                </fieldset>

                <!--end fieldset-->
                <fieldset>
                    <div class="row">
                    <div class="col-md-12"> <span class="text-dark"><b><i class="fa fa-car fa-2x"></i> Vehicles list</b></span>
                    <div class="col-md-12"> <hr>
                
                                    <div class="row">
                                        <div class="col-md-3" >
                                        <label class="mb-1"><b>Pick up date</b><b class="text-danger">*</b></label>
                                            <input id="PickUpDate" name="PickUpDate" type="date" class="form-control" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-3" >
                                        <label class="mb-1"><b>Delivery date</b><b class="text-danger">*</b></label>
                                            <input id="DeliveryDate" name="DeliveryDate" type="date" class="form-control" readonly>
                                        </div>

                                        <div class="col-md-3" >
                                            <label class="mb-1"><b>Order date (Today)</b></label>
                                            <input id="PickUpOrderDateDate" name="OrderDate" type="date" class="form-control" value="" readonly>
                                        </div>

                                        <div class="col-md-3" >
                                        <label class="mb-1"><b>Order status</b><b class="text-danger">*</b></label>
                                            <select style="width: 100%;" id="OrderStatusID" name="OrderStatusID"
                                                class="form-control" readonly>
                                                <?php foreach($OrderStatusList  as $key => $value): ?>
                                                <option value="<?= $value['Id']; ?>"> <?= $value['Status']; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
    
                                    </div><br/>
                   
                        <div class="col-md-12">
                            <div class="card">
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="repeater-default">
                                        <div data-repeater-list="car">
                                            <div data-repeater-item="">
                                                <div class="form-group row d-flex align-items-end">
                                                    <div class="row">

                                                    <div class="row registroVehiculo" id="templateVehiculo" style="padding-bottom:10px !important" hidden>

                                                        <div class="col-sm-2" >
                                                        <label class="mb-1"><b>Brand</b><b class="text-danger">*</b></label>
                                                            <select style="width: 90%;" name="Brand"
                                                                class="select2 form-control mb-3 custom-select BrandVehicle vehicleList" readonly>
                                                                <option value="" selected>Select brand</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-3" >
                                                        <label class="mb-1"><b>Model</b><b class="text-danger">*</b></label>
                                                            <select style="width: 90%;" name="Model"
                                                                class="select2 form-control mb-3 custom-select ModelVehicle vehicleList" readonly>
                                                                <option value="" selected>Select model</option>
                                                            </select>
                                                        </div>

                                                            <!--end col-->
                                                         <div class="col-sm-1" >
                                                         <label class="mb-1"><b>Year</b><b class="text-danger">*</b></label>
                                                            <input type="number"  min="1900" name="Year"  class="form-control YearVehicle vehicleList" placeholder="" readonly>
                                                        </div>

                                                              <!-- end row -->
                                                         <div class="col-sm-1" >
                                                         <label class="mb-1"><b>Color</b><b class="text-danger">*</b></label>
                                                            <select style="width: 100%;" name="Color" class="form-control ColorVehicle vehicleList" readonly>
                                                            <option value="" selected></option>
                                                                <option value="White"> White</option>
                                                                <option value="Black"> Black</option>
                                                                <option value="Gray"> Gray</option>
                                                                <option value="Silver"> Silver</option>
                                                                <option value="Blue"> Blue</option>
                                                                <option value="Red"> Red</option>
                                                                <option value="Brown/Beige"> Brown/Beige</option>
                                                                <option value="Yellow/Gold"> Yellow/Gold</option>
                                                                <option value="Green"> Green</option>
                                                                <option value="Other"> Other</option>

                                                            </select>
                                                        </div>

                                                        <div class="col-sm-1" >
                                                        <label class="mb-1"><b>Carrier</b><b class="text-danger">*</b></label>
                                                            <select style="width: 100%;" name="CarrierType" class="form-control CarrierTypeVehicle vehicleList" readonly>
                                                                <option value="" selected></option>
                                                                <option value="Open">Open</option>
                                                                <option value="Enclosed">Enclosed</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-1" >
                                                        <label class="mb-1"><b>Condition</b><b class="text-danger">*</b></label>
                                                            <select style="width: 100%;" name="ConditionVehicle" class="form-control ConditionVehicle vehicleList" readonly>
                                                                <option value="" selected></option>
                                                                <option value="Running">Running</option>
                                                                <option value="Non-running">Non-running</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-3" >
                                                        <label class="mb-1"><b>Vin</b></label>
                                                            <div class="input-group">
                                                                <input type="text" name="Vin" class="form-control VinVehicle vehicleList" readonly>
                                                            </div>
                                                        </div>

                                                        <!--end col-->

                                                        </div>

                                                    <!--- HASTA AQUI-->
                                                        <div class="col-md-12" id="contentVehicle" style="overflow-y: auto;"></div>
                                                       
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
                    </div>
                </fieldset>
                <!--end fieldset-->
                <br>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="credit-card"></i> Payment</b></span>
                            <hr>
                            <div class="row">	
                                <input type="text" id="PaymentID" name="PaymentID" value="<?= $Payment->Id; ?>" hidden/>
                                <div class="col-md-6" >
                                <label class="mb-1"> Card holder name<b class="text-danger">*</b></label>
                                    <input type="text" class="form-control" name="CardHolderName" id="CardHolderName" style="text-transform:uppercase" readonly>
                                </div>

                                <div class="col-md-6" >
                                            <label class="mb-1">Reference</label>
                                            <input id="Reference" name="Reference" type="text" class="form-control" placeholder="0000000" readonly>
                                </div>

                                <!-- end row -->
                            </div>
                            <br>
                        </div>
                        <!--end col-->
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="dollar-sign"></i>
                                     Customer payment </b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" >
                                <label class="mb-1"><b>Total</b><b class="text-danger">*</b></label>
                                    <input type="number" class="form-control" name="Total" id="Total"
                                        placeholder="$0000" value="0" readonly>
                                </div>
                                <div class="col-md-6" >
                                <label class="mb-1"><b>Deposit</b><b class="text-danger">*</b></label>
                                    <input id="Deposit" name="Deposit" type="number" class="form-control"
                                        placeholder="$0000" value="0" readonly>
                                </div>
                                <!-- end row -->
                            </div>

                            <br>
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
                                        <div class="col-md-5" >
                                        <label class="mb-1"><i class="fa fa-credit-card"></i> Credit card number<b class="text-danger">*</b></label>
                                            <input id="CreditCard" name="CreditCard" type="text" class="form-control"
                                                placeholder="#### #### #### ####" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-3" >
                                        <label class="mb-1">Expiration date<b class="text-danger">*</b></label>
                                            <input id="ExpDate" name="ExpDate" type="text" class="form-control"
                                                placeholder="00/00" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                        <label class="mb-1">CVV<b class="text-danger">*</b></label>
                                            <input id="Cvv" name="Cvv" type="text" class="form-control"
                                                placeholder="" readonly>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12" >
                                        <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Billing address<b class="text-danger">*</b></label>
                                        
                                            <input id="BillingAddress" name="BillingAddress" type="text" class="form-control" placeholder="Ex. 12141 Pembroke Rd...." autocomplete="disabled" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Billing city<b class="text-danger">*</b></label>
                                                <input id="BillingCity" name="BillingCity" type="text"
                                                    class="form-control BillingInput" placeholder="City" readonly >
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Billing state<b class="text-danger">*</b></label>
                                                <input id="BillingState" name="BillingState" type="text"
                                                    class="form-control BillingInput" placeholder="State" readonly>
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Billing zip code</label>
                                                <input id="BillingZipCode" name="BillingZipCode" type="text"
                                                    class="form-control BillingInput" placeholder="00000" readonly>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4" >
                                        <label class="mb-1"><i class="fa fa-mobile"></i> Phone number #1<b class="text-danger">*</b></label>
                                            <input id="Tel1" name="Tel1" type="tel" class="form-control phone"
                                                placeholder="(555) 555-5555" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #2</label>
                                            <input id="Tel2" name="Tel2" type="tel" class="form-control phone"
                                                placeholder="(555) 555-5555" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-envelope"></i> Email</label>
                                            <input id="PaymentEmail" name="PaymentEmail" type="email"
                                                class="form-control" placeholder="us@domain.com" readonly>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
        
                        </div>

                        <div class="col-md-6">
                        <div class="row">
                                <div class="col-md-12" >
                                    <label class="mb-1"><i class="fa fa-sticky-note"></i> Payment note</label>
                                    <textarea id="PaymentNote" name="PaymentNote" class="form-control"
                                        placeholder="Opcional information" rows="5" readonly></textarea>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
             
                    </div>
                </fieldset>

               <br>
            <hr/>
                <fieldset>
                <div class="row">
                        <div class="col-md-6"> 
                        <span class="text-dark"><b><i data-feather="truck"></i> Company services</b></span><br>
                        <hr>
                                <div class="row">
                                    <label class="mb-1">Company name</label>
                                        <div class="input-group">
                                            <select style="width: 100%;" id="IdCompanyService" name="IdCompanyService" class="select2 form-control mb-3 custom-select" readonly>
                                            </select>
                                        </div>
                                </div>

                                <div class="row inputpadding">
                                    <div class="col-md-12" >
                                        <label class="mb-1">Company address</label>
                                        <input id="CompanyAddress" name="CompanyAddress" type="text"  class="form-control" placeholder="Input the company's address" readonly>
                                    </div>
                                </div>

                                    <div class="row inputpadding">

                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #1</label>
                                                <input id="CompanyPhone1" name="CompanyPhone1" type="tel"
                                                    class="form-control" placeholder="+1 (555) 555-5555" readonly>
                                            </div>

                                            
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
                                                <input id="CompanyPhone2" name="CompanyPhone2" type="tel"
                                                    class="form-control" placeholder="+1 (555) 555-5555" readonly>
                                            </div>
                                        
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-envelope"></i> Email</label>
                                                <input id="CompanyEmail" name="CompanyEmail" type="email"
                                                    class="form-control" placeholder="ez@domain.com" readonly>
                                            </div>
                                    </div>
                                    <br>

                                    <div class="row inputpadding">
                                            <span class="text-dark"><b><i class="fa fa-bus fa-2x"></i> Drivers</b></span><br/><hr>
                                                <div class="row">
                                                    <label class="mb-1">Driver name</label>
                                                    <div class="input-group">
                                                        <select style="width: 100%;" id="IdDriver" name="IdDriver" class="select2 form-control mb-3 custom-select" readonly> </select>
                                                    </div>
                                                </div>
                                    </div>

                                    <div class="row inputpadding">
                                        <div class="col-md-6" >
                                            <label class="mb-1"><i class="fa fa-mobile"></i> Driver phone #1</label>
                                            <input id="DriverPhone1" name="DriverPhone1" type="number"
                                                class="form-control" placeholder="+1 (555) 555-5555" readonly>
                                        </div>
                                      
                                        <div class="col-md-6" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Driver phone #2</label>
                                            <input id="DriverPhone2" name="DriverPhone2" type="number"
                                                class="form-control" placeholder="+1 (555) 555-5555" readonly>
                                        </div>

                                    </div>
                        </div>

                        <!--end col-->
                              <div class="col-md-6"> 
                                    <span class="text-dark"><b><i data-feather="dollar-sign"></i>Driver payment </b></span>
                                        <hr>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6" >
                                                    <label class="mb-1"><i class="fa fa-lock text-secondary" ></i> <b>Total</b></label>
                                                    <input type="number" class="form-control" name="TotalOrder" id="TotalOrder"
                                                        placeholder="$0000" readonly value="0" readonly>
                                                </div>
                                                <div class="col-md-3" >
                                                    <label class="mb-1"><i class="fa fa-lock text-secondary" ></i> <b>Deposit</b></label>
                                                    <input id="DepositOrder" name="DepositOrder" type="number" class="form-control"
                                                        placeholder="$0000" readonly value="0" readonly>
                                                </div>

                                                <div class="col-md-3" >
                                                  <label class="mb-1"><i class="fa fa-money-bill"></i><b class="text-success"> Earnings</b></label>
                                                  <input id="Earnings" name="Earnings" type="text" class="form-control" placeholder="$0000" readonly value="0">
                                                 </div>

                                            </div><br>

                                                <div class="row">
                                                    <div class="col-md-6" >
                                                        <label class="mb-1"><i class="fa fa-lock text-secondary" ></i> Cod</label>
                                                        <input id="Cod" name="Cod" type="number" class="form-control" placeholder="$0000" readonly value="0" readonly>
                                                    </div>

                                                    <div class="col-md-6" >
                                                        <label class="mb-1"><i class="fa fa-lock text-secondary" ></i> Truker rate</label>
                                                        <input id="TrukerRate" name="TrukerRate" type="number" class="form-control" placeholder="$0000" value="0" readonly>
                                                    </div>
                                                </div>

                                                <div class="row inputpadding">
                                                    <div class="col-md-6">
                                                        <label class="mb-1"><i class="fa fa-dollar-sign"></i><b class="text-warning"> Extra truker Fee</b></label>
                                                        <input id="ExtraTrukerFee" name="ExtraTrukerFee" type="number" class="form-control" placeholder="$0000" value="0" readonly>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="mb-1"><i class="fa fa-truck"></i> <b class="text-danger">Truker owes us</b></label>
                                                        <input id="TrukerOwesUs" name="TrukerOwesUs" type="number" class="form-control"  placeholder="$0000" value="0" readonly>
                                                    </div>
                                                </div>

                                          </div>
                                    </div>
                                </div>
                            <!--end form-group-->
                        </div>
            
                </fieldset>
                <!--end fieldset-->

            </form>
            <!--end form-->
        </div>
        <!--end card-body-->
        <a href="index.php?c=Orders&a=Edit&Id=<?=$Order->Id?>" class="d-print-none btn btn-warning text-white"><i class="fa fa-edit text-white"></i> Edit order</a>
    </div>
    <!--end card-->
</div>
<!--end modal-body-->



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="assets/js/ordersview.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    $('.select2').select2({disabled:'readonly'});
   $("body").addClass("enlarge-menu");
   $(".ListVehiclesPDF").html("");
});


GetListCustomer();
GetListVehicles();


function GetListVehicles() {
  
    $.ajax({
        type: 'POST',
        url: "index.php?c=vehicles&a=GetListVehicles",
     }).then(function(response) {

        $('.BrandVehicle, .ModelVehicle').empty();

        var data = JSON.parse(response);

        if (data.BrandsList.length > 0) {

            data.BrandsList.forEach(element => {
                var optionBucle = new Option(element.Brand, element.Brand, true, true);
                $('.BrandVehicle').append(optionBucle); //.trigger('change');
            });
        }

        if (data.ModelsList.length > 0) {

            data.ModelsList.forEach(element => {
                var optionBucle = new Option(element.Model, element.Model, true, true);
                $('.ModelVehicle').append(optionBucle); //.trigger('change');
            });

        }

        var optionDefault = new Option("Select brand", "", true, true);
        $('.BrandVehicle').append(optionDefault);
        $('.BrandVehicle').val("").trigger('change');

        $('.ModelVehicle').val("").trigger('change');
        var optionDefault2 = new Option("Select model", "", true, true);
        $('.ModelVehicle').append(optionDefault2);

        $(".toast-success").html("Vehicles list ready");
        var myAlert = document.getElementById('toastSuccess');
        var bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
        
    });

}



function GetListCustomer() {

    $.ajax({
        type: 'POST',
        url: "index.php?c=customers&a=GetListCustomers",
    }).then(function(response) {

        var data = JSON.parse(response);

        var optionDefault = new Option("Select origin customer", "", true, true);
        $('#IdCustomerOrigin').append(optionDefault);

        var optionDefault2 = new Option("Select destination customer", "", true, true);
        $('#IdCustomerDestination').append(optionDefault2);

        if (data.OriginList.length > 0) {

            data.OriginList.forEach(element => {
                var optionBucle = new Option(element.Customer, element.Id, true, true);
                $('#IdCustomerOrigin').append(optionBucle); //.trigger('change');
            });
        }

        if (data.DestinationList.length > 0) {

            data.DestinationList.forEach(element => {
                var optionBucle2 = new Option(element.Customer, element.Id, true, true);
                $('#IdCustomerDestination').append(optionBucle2); //.trigger('change');
            });

        }

        $('#IdCustomerOrigin').val("").trigger('change');
        $('#IdCustomerDestination').val("").trigger('change');
       
        $(".toast-success").html("Customer list ready");
        var myAlert = document.getElementById('toastSuccess');
        var bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
        

        });
}

function loadInfoPDF1(){
 
    $(".OrderDateForm").text($("#PickUpOrderDateDate").val());
    $(".ListVehiclesPDF").html("");

    //Origin Info
    $(".OriginNameForm").html($("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) != "" ? $("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) : "<span class='text-danger'>Check origin customer name</span>");
    
    $(".OriginAddressForm").html($("#OriginAddress").val() != "" ? $("#OriginAddress").val() :  "<span class='text-danger'>Check origin address</span>");

    $(".PickUpDateForm").html($("#PickUpDate").val() != "" ? $("#PickUpDate").val() :  "<span class='text-danger'>Check pick up date</span>");
    $(".DeliveryDateForm").html($("#DeliveryDate").val() != "" ? $("#DeliveryDate").val() :  "<span class='text-danger'>Check delivery date</span>");

    if($("#OriginZip").val() != ""){
        $(".OriginAddressForm").html($("#OriginAddress").val() != "" ? $("#OriginAddress").val() + "<br> Zip code: "+$("#OriginZip").val() :  "<span class='text-danger'>Check origin address</span>");
    }
   
    $(".OriginPhone1Form").html($("#OriginPhone1").val() != "" ? $("#OriginPhone1").val() :  "<span class='text-danger'>Check origin phone1</span>");
    $(".OriginPhone2Form").html($("#OriginPhone2").val() != "" ? "/ "+$("#OriginPhone2").val() :  "");

    
    //Destination Info
    $(".DestinationNameForm").html($("#IdCustomerDestination :selected").text().substr(0, $("#IdCustomerDestination :selected").text().indexOf("-")) != "" ? $("#IdCustomerDestination :selected").text().substr(0, $("#IdCustomerDestination :selected").text().indexOf("-")) : "<span class='text-danger'>Check destination customer name</span>");
    
    $(".DestinationAddressForm").html($("#DestinationAddress").val() != "" ? $("#DestinationAddress").val() :  "<span class='text-danger'>Check destination address</span>");

    if($("#DestinationZip").val() != ""){
        $(".DestinationAddressForm").html($("#DestinationAddress").val() != "" ? $("#DestinationAddress").val() + "<br> Zip code: "+$("#DestinationZip").val() :  "<span class='text-danger'>Check destination address</span>");
    }
   
    $(".DestinationPhone1Form").html($("#DestinationPhone1").val() != "" ? $("#DestinationPhone1").val() :  "<span class='text-danger'>Check destination phone1</span>");
    $(".DestinationPhone2Form").html($("#DestinationPhone2").val() != "" ? "/ "+$("#DestinationPhone2").val() :  "");

    //Vehicles Step info

    var Vin, Brand, Model, ConditionVehicle, CarrierType, Color, Year, Vin = "";
    var markup = "";

    $(".registroVehiculo").each(function(){
       
       Brand       = $(this).find("select[name='Brand']").val();
       Vin         = $(this).find("input[name^='Vin']").val();
       Model       = $(this).find("select[name='Model']").val();
       Color       = $(this).find("select[name='Color']").val();
       Year        = $(this).find("input[name='Year']").val();
       ConditionVehicle   = $(this).find("select[name='ConditionVehicle']").val();
       CarrierType = $(this).find("select[name='CarrierType']").val();

       if(Brand != ""){

        markup += "<tr>"
                     +"<td><h5 class='mt-0 mb-1 font-14'>"+Brand+"</h5><p class='mb-0 text-muted'>Vin "+Vin+"</p></td>"
                     +"<td>" + Model + "</td>"
                     +"<td>" + Color + "</td>"
                     +"<td>" + Year + "</td>"
                     +"<td>" + ConditionVehicle + "</td>"
                     +"<td>" + CarrierType + "</td>"
                     +"</tr>";
       }
       
      
    });

     $(".ListVehiclesPDF").append(markup);

     //Payment info
     $(".TotalForm").html($("#Total").val() != "" ? "US$ "+$("#Total").val() :  "<span class='text-danger'>Check total payment</span>");
    $(".DepositForm").html($("#Deposit").val() != "" ? "US$ "+$("#Deposit").val() :  "<span class='text-danger'>Check deposit payment</span>");
    $(".CardHolderNameForm").html($("#CardHolderName").val() != "" ? $("#CardHolderName").val() :  "<span class='text-danger'>Check card holder name</span>");
    $(".CreditCardNumberForm").html($("#CreditCard").val() != "" ? $("#CreditCard").val() :  "<span class='text-danger'>Check credit card number</span>");
    $(".ExperationDateForm").html($("#ExpDate").val() != "" ? $("#ExpDate").val() :  "<span class='text-danger'>Check experation date</span>");
    $(".CVVForm").html($("#Cvv").val() != "" ? $("#Cvv").val() :  "<span class='text-danger'>Check CVV code</span>");
  
    $(".BillingAddressForm").html($("#BillingAddress").val() != "" ? $("#BillingAddress").val() :  "<span class='text-danger'>Check billing address</span>");
    $(".BillingCityForm").html($("#BillingCity").val() != "" ? $("#BillingCity").val() :  "<span class='text-danger'>Check billing city</span>");
    $(".BillingStateForm").html($("#BillingState").val() != "" ? $("#BillingState").val() :  "<span class='text-danger'>Check billing state</span>");
    $(".BillingZipCodeForm").html($("#BillingZipCode").val() != "" ? $("#BillingZipCode").val() :  "<span class='text-danger'>Check billing zipcode</span>");

    var OriginNote = "";
    var DestinationNote = "";
    var OriginDestinationNote = "";

    if($("#OriginNote").val() != ""){
        OriginNote ="<b>Origin notes:</b><br> "+$("#OriginNote").val()+"<br>";
    }

    if($("#DestinationNote").val() != ""){
        DestinationNote ="<b>Destination notes:</b></br> "+$("#DestinationNote").val();
    }

    OriginDestinationNote = OriginNote + "<br>" + DestinationNote;
    $(".OriginDestinationNotesForm").html(OriginDestinationNote != "" ? OriginDestinationNote :  "");
                                                  
}

function loadInfoPDF2(){
 

 //Origin Info
 //$(".OriginNameForm").html($("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) != "" ? $("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) : "<span class='text-danger'>Check origin customer name</span>");
 
 //$(".OriginAddressForm").html($("#OriginAddress").val() != "" ? $("#OriginAddress").val() :  "<span class='text-danger'>Check origin address</span>");

  //Payment info
  $("#TruckerCODForm").html($("#Cod").val() != "" ? "US$ "+$("#Cod").val() :  "<span class='text-danger'>Check Cod field</span>");
  $("#TruckerFeeForm").html($("#ExtraTrukerFee").val() != "" ? "US$ "+$("#ExtraTrukerFee").val() :  "");
  $("#TruckerRateForm").html($("#TrukerRate").val() != "" ? "US$ "+$("#TrukerRate").val() :  "");
  

}


function GetListDrivers() {

$.ajax({
    type: 'POST',
    url: "index.php?c=drivers&a=GetListDrivers",
}).then(function(response) {

    var data = JSON.parse(response);

    if (data.length > 0) {

        data.forEach(element => {
            var optionBucle = new Option(element.Driver, element.Id, true, true);
            $('#IdDriver').append(optionBucle); //.trigger('change');
        });
    }

    var optionDefault = new Option("Select driver ", "", true, true);
    $('#IdDriver').append(optionDefault);
    $('#IdDriver').val("").trigger('change');

    $(".toast-success").html("Driver's list ready");
    var myAlert = document.getElementById('toastSuccess');
    var bsAlert = new bootstrap.Toast(myAlert);
    bsAlert.show();
    


    });
}




function GetListCompanyServices() {

$.ajax({
    type: 'POST',
    url: "index.php?c=companyServices&a=GetListCompanyServices",
}).then(function(response) {

    var data = JSON.parse(response);

    if (data.length > 0) {

        data.forEach(element => {
            var optionBucle = new Option(element.CompanyName, element.Id, true, true);
            $('#IdCompanyService').append(optionBucle); //.trigger('change');
        });
    }

    var optionDefault = new Option("Select trucker company", "", true, true);
    $('#IdCompanyService').append(optionDefault);
    $('#IdCompanyService').val("").trigger('change');

    $(".toast-success").html("Trucker list ready");
    var myAlert = document.getElementById('toastSuccess');
    var bsAlert = new bootstrap.Toast(myAlert);
    bsAlert.show();
    });
}

GetListDrivers();
GetListCompanyServices();

function LoadEditFields(){

    var IdCustomerOrigin = "<?= $Order->IdCustomerOrigin; ?>";
    $('#IdCustomerOrigin').val(IdCustomerOrigin);
    $('#IdCustomerOrigin').select2().trigger('change');

    var IdCompanyService = "<?= $Order->IdCompanyService; ?>";
    $('#IdCompanyService').val(IdCompanyService);
    $('#IdCompanyService').select2().trigger('change');

    var IdDriver = "<?= $Order->IdDriver; ?>";
    $('#IdDriver').val(IdDriver);
    $('#IdDriver').select2().trigger('change');

    var OriginAddress = "<?= $Order->OriginAddress; ?>";
    $("#OriginAddress").val(OriginAddress);

    var OriginCity = "<?= $Order->OriginCity; ?>";
    $("#OriginCity").val(OriginCity);

    var OriginState = "<?= $Order->OriginState; ?>";
    $("#OriginState").val(OriginState);

    var OriginZip = "<?= $Order->OriginZip; ?>";
    $("#OriginZip").val(OriginZip);

    var OriginNote = "<?= $Order->OriginNote; ?>";
    $("#OriginNote").val(OriginNote);

    //Destination

    var IdCustomerDestination = "<?= $Order->IdCustomerDestination; ?>";
    $('#IdCustomerDestination').val(IdCustomerDestination);
    $('#IdCustomerDestination').select2().trigger('change');
    
    var DestinationAddress = "<?= $Order->DestinationAddress; ?>";
    $("#DestinationAddress").val(DestinationAddress);

    var DestinationCity = "<?= $Order->DestinationCity; ?>";
    $("#DestinationCity").val(DestinationCity);

    var DestinationState = "<?= $Order->DestinationState; ?>";
    $("#DestinationState").val(DestinationState);

    var DestinationZip = "<?= $Order->DestinationZip; ?>";
    $("#DestinationZip").val(DestinationZip);

    var DestinationNote = "<?= $Order->DestinationNote; ?>";
    $("#DestinationNote").val(DestinationNote);

    //Vehicles Step

    var PickUpDate = "<?= $Order->PickUpDate; ?>";
    $("#PickUpDate").val(PickUpDate);

    var DeliveryDate = "<?= $Order->DeliveryDate; ?>";
    $("#DeliveryDate").val(DeliveryDate);

    var OrderDate = "<?= $Order->OrderDate; ?>";
    $("#PickUpOrderDateDate").val(OrderDate);

    var OrderStatusID = "<?= $Order->OrderStatusID; ?>";
    $("#OrderStatusID").val(OrderStatusID);

    <?php
        $js_array = json_encode($OrderDetail);
        echo "var vehicleJSON = JSON.parse(".$js_array.");";
     ?>

    if(vehicleJSON.length >0){

        vehicleJSON.forEach(element => {
            EditVehicleList(element.Brand, element.Model, element.Year, element.Color, element.ConditionVehicle, element.CarrierType, element.Vin);
        });
    }

    //$Payment Step

    var CardHolderName = "<?= $Payment->CardHolderName; ?>";
    $("#CardHolderName").val(CardHolderName);


    var CreditCard = "<?= $Payment->CreditCard; ?>";
    $("#CreditCard").val(CreditCard);

    var ExpDate = "<?= $Payment->ExpDate; ?>";
    $("#ExpDate").val(ExpDate);

    var Cvv = "<?= $Payment->Cvv; ?>";
    $("#Cvv").val(Cvv);
   
    var BillingAddress = "<?= $Payment->BillingAddress; ?>";
    $("#BillingAddress").val(BillingAddress);

    var BillingState = "<?= $Payment->BillingState; ?>";
    $("#BillingState").val(BillingState);

    var BillingCity = "<?= $Payment->BillingCity; ?>";
    $("#BillingCity").val(BillingCity);

    var BillingZipCode = "<?= $Payment->BillingZipCode; ?>";
    $("#BillingZipCode").val(BillingZipCode);

    var Tel1 = "<?= $Payment->Tel1; ?>";
    $("#Tel1").val(Tel1);

    var Tel2 = "<?= $Payment->Tel2; ?>";
    $("#Tel2").val(Tel2);

    var PaymentEmail = "<?= $Payment->PaymentEmail; ?>";
    $("#PaymentEmail").val(PaymentEmail);

    var PaymentNote = "<?= $Payment->PaymentNote; ?>";
    $("#PaymentNote").val(PaymentNote);

    var Reference = "<?= $Payment->Reference; ?>";
    $("#Reference").val(Reference);

    var Total = "<?= $Order->Total; ?>";
    $("#Total").val(Total);

    var Deposit = "<?= $Order->Deposit; ?>";
    $("#Deposit").val(Deposit);

        var TotalOrder = "<?= $Order->Total; ?>";
        $("#TotalOrder").val(TotalOrder);

        var Deposit = "<?= $Order->Deposit; ?>";
        $("#DepositOrder").val($("#Deposit").val());

        var Earnings = "<?= $Order->Earnings; ?>";
        $("#Earnings").val(Earnings);

        var Cod = "<?= $Order->Cod; ?>";
        $("#Cod").val(Cod);

        var TrukerRate = "<?= $Order->TrukerRate; ?>";
        $("#TrukerRate").val(TrukerRate); 

        var ExtraTrukerFee = "<?= $Order->ExtraTrukerFee; ?>";
        $("#ExtraTrukerFee").val(ExtraTrukerFee); 
}

function EditVehicleList(Brand, Model, Year, Color, ConditionVehicle, CarrierType, Vin) {
//#contentVehicle"
$("#templateVehiculo").find(".select2").each(function(index) {
    if ($(this).data('select2')) {
        $(this).select2('destroy');
    }
});


var clonado =  $('#templateVehiculo').clone().val('');
clonado.removeAttr('hidden');
clonado.appendTo("#contentVehicle");

$(clonado).find(".BrandVehicle").val(Brand);
$(clonado).find(".BrandVehicle").select2().trigger('change');

$(clonado).find(".ModelVehicle").val(Model);
$(clonado).find(".ModelVehicle").select2().trigger('change');

$(clonado).find(".YearVehicle").val(Year);
$(clonado).find(".CarrierTypeVehicle ").val(CarrierType);
$(clonado).find(".ConditionVehicle ").val(ConditionVehicle);
$(clonado).find(".ColorVehicle").val(Color);
$(clonado).find(".VinVehicle").val(Vin);
$(clonado).find(".select2").select2();

}


$(document).ready(function($){
setTimeout(() => {LoadEditFields();}, 3000);
});
</script>