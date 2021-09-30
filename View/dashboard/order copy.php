
<div class="modal fade" id="ModalNewCustomer" role="dialog" aria-labelledby="ModalNewCustomerLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title m-0" id="ModalNewCustomerLabel"> <i class="fas fa-user-plus me-2"></i> New
                    customer</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="mb-1">
                                <label for="IdCustomerTypeNewCustomer" class="text-danger">*Customer type:</label>
                                <select style="width: 100%;" id="IdCustomerTypeNewCustomer"
                                    name="IdCustomerTypeNewCustomer" class="select2 form-control mb-3 custom-select">
                                    <option value="" selected>Select customer type</option>
                                    <?php foreach($CustomerTypeList  as $key => $value): ?>
                                    <option value="<?= $value['Id']; ?>">
                                        <?= $value['NameType']; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label text-danger" for="NameNewCustomer">*Name:</label>
                                <input class="form-control" type="text" id="NameNewCustomer" name="NameNewCustomer">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="LastNameNewCustomer">Last name:</label>
                                <input class="form-control" type="text" id="LastNameNewCustomer"
                                    name="LastNameNewCustomer">
                            </div>
                            <div class="mb-1">
                                <label class="form-label text-danger" for="Phone1NewCustomer">*Phone #1</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="fa fa-mobile"></i></span>
                                    <input type="tel" class="form-control" id="Phone1NewCustomer"
                                        name="Phone1NewCustomer" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="Phone2NewCustomer">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="Phone2NewCustomer"
                                        name="Phone2NewCustomer" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="EmailNewCustomer">Email address</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-at"></i></span>
                                    <input type="email" class="form-control" id="EmailNewCustomer"
                                        name="EmailNewCustomer" placeholder="customer@domain.com"
                                        aria-describedby="basic-addon1">
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

<div class="modal fade" id="ModalNewVehicle" role="dialog" aria-labelledby="ModalNewVehicleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title m-0" id="ModalNewVehicleLabel"> <i class="fas fa-car me-2"></i> New
                    vehicle</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="mb-1">
                                <label class="form-label text-danger" for="BrandNewVehicle">*Brand:</label>
                                <input class="form-control" type="text" id="BrandNewVehicle" name="BrandNewVehicle">
                            </div>
                            <div class="mb-1">
                                <label class="form-label text-danger" for="ModelNewVehicle">*Model:</label>
                                <input class="form-control" type="text" id="ModelNewVehicle" name="ModelNewVehicle">
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end modal-body-->
            <div class="modal-footer">
                <button type="button" onclick="newVehicle()" class="btn btn-soft-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>

<div class="modal fade" id="ModalNewCompanyService" role="dialog" aria-labelledby="ModalNewCompanyServiceLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title m-0" id="ModalNewCompanyServiceLabel"> <i class="fas fa-user-plus me-2"></i> New
                    Company</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">

                            <div class="mb-1">
                                <label class="form-label text-danger" for="CompanyNameNewCompany">*Company name:</label>
                                <input class="form-control" type="text" id="CompanyNameNewCompany"
                                    name="CompanyNameNewCompany">
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-danger" for="CompanyAddressNewCompany">*Address:</label>
                                <input class="form-control" type="text" id="CompanyAddressNewCompany"
                                    name="CompanyAddressNewCompany">
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-danger" for="CompanyPhone1NewCompany">*Phone #1</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="CompanyPhone1NewCompany"
                                        name="CompanyPhone1NewCompany" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="CompanyPhone2NewCompany">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="CompanyPhone2NewCompany"
                                        name="CompanyPhone2NewCompany" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="CompanyEmailNewCompany">Email address</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-at"></i></span>
                                    <input type="email" class="form-control" id="CompanyEmailNewCompany"
                                        name="CompanyEmailNewCompany" placeholder="customer@domain.com"
                                        aria-describedby="basic-addon1">
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
                <button type="button" onclick="newCompany()" class="btn btn-soft-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
            <!--end modal-footer-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>

<div class="modal fade" id="ModalNewDriver" role="dialog" aria-labelledby="ModalNewDriverLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h6 class="modal-title m-0" id="ModalNewDriverLabel"> <i class="fa fa-address-card me-2"></i> New driver
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">

                            <div class="mb-1">
                                <label class="form-label text-danger" for="DriverNameNewDriver">*Driver name:</label>
                                <input class="form-control" type="text" id="DriverNameNewDriver"
                                    name="DriverNameNewDriver">
                            </div>

                            <div class="mb-1">
                                <label class="form-label text-danger" for="DriverPhone1NewDriver">*Phone #1</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="DriverPhone1NewDriver"
                                        name="DriverPhone1NewDriver" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="DriverPhone2NewDriver">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control" id="DriverPhone2NewDriver"
                                        name="DriverPhone2NewDriver" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
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
                <button type="button" onclick="newDriver()" class="btn btn-soft-primary btn-sm">Save changes</button>
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



<div class="modal-body bg-dark">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                data-bs-target="#ModalNewCustomer"><i class="fas fa-user-plus me-2"></i>New customer</button>
            <button type="button" class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                data-bs-target="#ModalNewVehicle"><i class="fas fa-car me-2"></i>New vehicle</button>
            <button type="button" class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                data-bs-target="#ModalNewCompanyService"><i class="fas fa-building me-2"></i>New company</button>
            <button type="button" class="btn btn-sm btn-soft-info" data-bs-toggle="modal"
                data-bs-target="#ModalNewDriver"><i class="fa fa-address-card me-2"></i>New driver</button>
            <button type="button" class="btn btn-soft-danger btn-sm"
                onclick="$('input, textarea, select').val('');">Clear all fields</button>
        </div>
        <!--end card-header-->
        <div class="card-body">
            <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                <h3>Basic info</h3>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="map-pin"></i> Origin information</b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12" >
                                    <label class="mb-1">Origin customer name</label>
                                    <div class="input-group">
                                        <select style="width: 90%;" id="IdCustomerOrigin" name="IdCustomerOrigin"
                                            class="select2 form-control mb-3 custom-select originInput"
                                            aria-describedby="button-addon1">
                                        </select>
                                        <button class="btn btn-dark" type="button" id="SearchCustomerName"><i
                                                class="ti ti-reload"></i></button>
                                    </div>
                                </div>
                            </div><!-- end row -->
                            <br>
                        </div>
                        <!--end col-->
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="arrow-right-circle"></i>
                                    Destination
                                    information</b></span>
                            <hr>
                            <div class="row">

                                <div class="col-md-12" >
                                    <label class="mb-1">Destination customer name</label>
                                    <div class="input-group">
                                        <select style="width: 90%;" id="IdCustomerDestination"
                                            name="IdCustomerDestination"
                                            class="select2 form-control mb-3 custom-select DestinationInput"
                                            aria-describedby="button-addon1">
                                        </select>
                                        <button class="btn btn-dark" type="button" id="SearchDestinationCustomer"><i
                                                class="ti ti-reload"></i></button>
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
                                        <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin address</label>
                                        <input id="OriginAddress" name="OriginAddress" type="text"
                                            class="form-control originInput" placeholder="Ex. 12141 Pembroke Rd,...">
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                                <label class="mb-1">Origin city</label>
                                                <input id="OriginCity" name="OriginCity" type="text"
                                                    class="form-control originInput" placeholder="City">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1">Origin state</label>
                                                <input id="OriginState" name="OriginState" type="text"
                                                    class="form-control originInput" placeholder="State">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1">Origin zip code</label>
                                                <input id="OriginZip" name="OriginZip" type="text"
                                                    class="form-control originInput" placeholder="00000">
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
                                                    #1</label>
                                                <input id="OriginPhone1" name="OriginPhone1" type="tel"
                                                    class="form-control originInput" placeholder="+1 (555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone
                                                    #2</label>
                                                <input id="OriginPhone2" name="OriginPhone2" type="tel"
                                                    class="form-control originInput" placeholder="+1 (555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-envelope"></i> Origin email</label>
                                                <input id="OriginEmail" name="OriginEmail" type="email"
                                                    class="form-control originInput" placeholder="cus@domain.com">
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
                                            placeholder="Opcional information" rows="3"></textarea>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination
                                            address</label>
                                        <input id="DestinationAddress" name="DestinationAddress" type="text"
                                            class="form-control DestinationInput"
                                            placeholder="Ex. 1600 Pennsylvania...">
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" >
                                                <label class="mb-1">Destination city</label>
                                                <input id="DestinationCity" name="DestinationCity" type="text"
                                                    class="form-control DestinationInput" placeholder="City">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1">Destination state</label>
                                                <input id="DestinationState" name="DestinationState" type="text"
                                                    class="form-control DestinationInput" placeholder="State">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1">Destination zip code</label>
                                                <input id="DestinationZip" name="DestinationZip" type="text"
                                                    class="form-control DestinationInput" placeholder="00000">
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
                                                    #1</label>
                                                <input id="DestinationPhone1" name="DestinationPhone1" type="tel"
                                                    class="form-control DestinationInput"
                                                    placeholder="+1 (555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone
                                                    #2</label>
                                                <input id="DestinationPhone2" name="DestinationPhone2" type="tel"
                                                    class="form-control DestinationInput"
                                                    placeholder="+1 (555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-envelope"></i> Destination email</label>
                                                <input id="DestinationEmail" name="DestinationEmail" type="email"
                                                    class="form-control DestinationInput" placeholder="cus@domain.com">
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
                                            placeholder="Opcional information" rows="3"></textarea>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <br>
                            </div>
                        </div>
                </fieldset>
                <!--end fieldset-->
                <h3>Vehicles</h3>
                <fieldset>
                    <div class="row">
                    <div class="col-md-12"> 
                    <span class="text-dark"><b><i data-feather="file-text"></i> Vehicles to order</b></span>
                            <hr>
                            </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6" >
                                            <label class="mb-1"><b>Pick up date</b></label>
                                            <input id="PickUpDate" name="PickUpDate" type="date" class="form-control">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-6" >
                                            <label class="mb-1"><b>Delivery date</b></label>
                                            <input id="DeliveryDate" name="DeliveryDate" type="date"
                                                class="form-control">
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-md-6" >
                                            <label class="mb-1"><b>Order date (Today)</b></label>
                                            <input id="PickUpOrderDateDate" name="OrderDate" type="date"
                                                class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-6" >
                                            <label class="mb-1"><b>Order status</b></label>
                                            <select style="width: 100%;" id="OrderStatusID" name="OrderStatusID"
                                                class="form-control">
                                                <?php foreach($OrderStatusList  as $key => $value): ?>
                                                <option value="<?= $value['Id']; ?>"> <?= $value['Status']; ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <button title="Refresh brand and model list" data-tippy-size="large"
                                        class="btn btn-sm btn-dark tippy-btn" type="button" id="SearchVehicles"><i
                                            class="ti ti-reload"></i></button>
                                    <button type="button" onclick="AddVehicleList()"
                                        class="btn btn-sm btn-outline-primary"> <i class="fas fa-plus"></i> Add vehicles</button>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="repeater-default">
                                        <div data-repeater-list="car">
                                            <div data-repeater-item="">
                                                <div class="form-group row d-flex align-items-end">
                                                    <div class="row">
                                                        <div class="col-md-12" id="contentVehicle" style="overflow-y: auto; height:210px">

                                                            <div class="row" id="templateVehiculo" style="padding-bottom:20px !important">

                                                                <div class="col-sm-2" >
                                                                    <label class="mb-1"><b>Brand</b></label>
                                                                    <select style="width: 90%;" name="Brand[]"
                                                                        class="select2 form-control mb-3 custom-select BrandVehicle">
                                                                        <option value="" selected>Select brand</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-sm-3" >
                                                                    <label class="mb-1"><b>Model</b></label>
                                                                    <select style="width: 90%;" name="Model[]"
                                                                        class="select2 form-control mb-3 custom-select ModelVehicle">
                                                                        <option value="" selected>Select model</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-sm-1" >
                                                                    <label class="mb-1"><b>Condition</b></label>
                                                                    <select style="width: 100%;" name="Condition[]" class="form-control ConditionVehicle">
                                                                        <option selected value="Running">Running</option>
                                                                        <option value="Non-running">Non-running</option>
                                                                    </select>
                                                                </div>

                                                                  <div class="col-sm-1" >
                                                                    <label class="mb-1"><b>Carrier</b></label>
                                                                    <select style="width: 100%;" name="CarrierType[]" class="form-control CarrierTypeVehicle">
                                                                        <option value="Open">Open</option>
                                                                        <option value="Enclosed">Enclosed</option>
                                                                    </select>
                                                                </div>

                                                        

                                                                <!-- end row -->
                                                                <div class="col-sm-1" >
                                                                    <label class="mb-1"><b>Color</b></label>
                                                                    <select style="width: 100%;" name="Color[]"
                                                                        class="form-control ColorVehicle">
                                                                        <option value="White"> White</option>
                                                                        <option value="Black"> Black</option>
                                                                        <option value="Gray"> Gray</option>
                                                                        <option value="Silver"> Silver</option>
                                                                        <option value="Blue"> Blue</option>
                                                                        <option value="Red"> Red</option>
                                                                        <option value="Brown/Beige"> Brown/Beige
                                                                        </option>
                                                                        <option value="Yellow/Gold"> Yellow/Gold
                                                                        </option>
                                                                        <option value="Green"> Green</option>
                                                                        <option value="Other"> Other</option>

                                                                    </select>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-sm-1" >
                                                                    <label class="mb-1"><b>Year</b></label>
                                                                    <input type="number"  min="1900" name="Year[]"
                                                                        class="form-control YearVehicle" placeholder="">
                                                                </div>

                                                                <div class="col-sm-3" >
                                                                <label class="mb-1"><b>Vin</b></label>
                                                                    <div class="input-group">
                                                                         <input type="text" name="Vin[]" class="form-control VinVehicle">
                                                                         <button type="button" title="Delete vehicle" onclick="EliminarVehiculo(this)"  class="btn btn-outline-danger"> <span class="far fa-trash-alt me-1"></span> </button>
                                                                    </div>
                                                                </div>
                                                           
                                                                <!--end col-->

                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p class="text-secondary"><i class="fa fa-trash text-danger"></i>
                                                            Don't delete the first row.</p>
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
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="credit-card"></i> Credit Card
                                    info</b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12" >
                                    <label class="mb-1"> Card holder name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Input the name of card"
                                            name="CardHolderName" id="CardHolderName">
                                        <button class="btn btn-dark" type="button" id="SearchCardHolderName"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                    <label class="mb-1"><b>Total</b></label>
                                    <input type="number" class="form-control" name="Total" id="Total"
                                        placeholder="$0000">
                                </div>
                                <div class="col-md-6" >
                                    <label class="mb-1"><b>Deposit</b></label>
                                    <input id="Deposit" name="Deposit" type="number" class="form-control"
                                        placeholder="$0000">
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
                                            <label class="mb-1"><i class="fa fa-credit-card"></i> Credit card number</label>
                                            <input id="CreditCard" name="CreditCard" type="text" class="form-control"
                                                placeholder="#### #### #### ####">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-3" >
                                            <label class="mb-1">Expiration date</label>
                                            <input id="ExpDate" name="ExpDate" type="text" class="form-control"
                                                placeholder="00/00">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1">CVV</label>
                                            <input id="Cvv" name="Cvv" type="text" class="form-control"
                                                placeholder="000">
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8" >
                                            <label class="mb-1"><i class="fa fa-map-marker-alt"></i> Billing address</label>
                                            <input id="BillingAddress" name="BillingAddress" type="text"
                                                class="form-control" placeholder="Ex. 12141 Pembroke Rd....">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1">Reference</label>
                                            <input id="Reference" name="Reference" type="text" class="form-control"
                                                placeholder="">
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
                                            <label class="mb-1"><i class="fa fa-mobile"></i> Phone number #1</label>
                                            <input id="Tel1" name="Tel1" type="tel" class="form-control"
                                                placeholder="+1 (555) 555-5555">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #2</label>
                                            <input id="Tel2" name="Tel2" type="tel" class="form-control"
                                                placeholder="+1 (555) 555-5555">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-envelope"></i> Email</label>
                                            <input id="PaymentEmail" name="PaymentEmail" type="email"
                                                class="form-control" placeholder="us@domain.com">
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
                                        placeholder="Opcional information" rows="5"></textarea>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
             
                    </div>
                </fieldset>

                <h3>Save and print order</h3>
                <fieldset>
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <div class="card">
                                <div class="card-body invoice-head">
                                    <div class="row">
                                        <div class="col-md-3 align-self-center">
                                            <!--<img src="assets/images/logoTransport.png" alt="logo-small" class="logo-sm me-1" height="24">--><img
                                                src="assets/images/logoTransport.png" alt="logo-large"
                                                class="logo-lg logo-dark" height="150">
                                            <!--<img src="assets/images/logoTransport.png" alt="logo-large" class="logo-lg logo-light" height="20">-->
                                            <!--<p class="mt-2 mb-0 text-muted">Ez Auto Transportation</p>-->
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-8">
                                            <br>
                                            <ul class="list-inline mb-0 contact-detail float-end">
                                                <li class="list-inline-item">
                                                    <div class="ps-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-web"></i>
                                                            www.ezautotransportationusa.com</p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="ps-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-phone"></i> +123
                                                            123456789</p>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="ps-3">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-map-marker"></i>
                                                            2821 Kensington Road, Avondale Estates, GA 30002 USA.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="">
                                                <h6 class="mb-0"><b>Order Date :</b> 11/05/2020</h6>
                                                <h6><b>Order ID :</b> # 23654789</h6>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="float-left">
                                                <address class="font-13">
                                                    <strong class="font-14">Origin:</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="">
                                                <address class="font-13">
                                                    <strong class="font-14">Destination:</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive project-invoice">
                                                <table class="table table-bordered mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Brand</th>
                                                            <th>Model</th>
                                                            <th>Color</th>
                                                            <th>Year</th>
                                                            <th>Condition</th>
                                                            <th>Carrier type</th>
                                                        </tr>
                                                        <!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 font-14">Honda</h5>
                                                                <p class="mb-0 text-muted">Vin 132157878421212</p>
                                                            </td>
                                                            <td>Accord</td>
                                                            <td>White</td>
                                                            <td>2021</td>
                                                            <td>Running</td>
                                                            <td>Open</td>
                                                        </tr>
                                                        <!--end tr-->
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 font-14">Honda</h5>
                                                                <p class="mb-0 text-muted">Vin 465465465454545</p>
                                                            </td>
                                                            <td>Civic</td>
                                                            <td>Red</td>
                                                            <td>2018</td>
                                                            <td>Running</td>
                                                            <td>Open</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" class="border-0"></td>
                                                            <th colspan="2" class="border-0"></th>
                                                            <td class="border-0 font-14 text-dark"><b></b></td>
                                                            <td class="border-0 font-14 text-dark"><b></b>
                                                            </td>
                                                        </tr>
                                                        <!--end tr-->
                                                        <!--end tr-->
                                                        <tr class="bg-black text-white">
                                                            <th colspan="2" class="border-0"></th>
                                                            <th colspan="2" class="border-0"></th>
                                                            <td class="border-0 font-14"><b>Total</b></td>
                                                            <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                        </tr>
                                                        <!--end tr-->
                                                    </tbody>
                                                </table>
                                                <br>

                                                <div class="table-responsive project-invoice">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Payment information</b></th>
                                                            <th><b>Notes</b></th>
                                                        </tr>
                                                        <!--end tr-->
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="mt-0 mb-1 font-14"><b>Card holder name</b></h5>
                                                                <p class="mb-0 text-muted">OLIVER FERMIN</p>

                                                                <h5 class="mt-0 mb-1 font-14"><b>Credit card number</b></h5>
                                                                <p class="mb-0 text-muted">4764 4555 1234 5896</p>

                                                                <h5 class="mt-0 mb-1 font-14"><b>Expiration date</b></h5>
                                                                <p class="mb-0 text-muted">12/24</p>

                                                                <h5 class="mt-0 mb-1 font-14"><b>CVV</b></h5>
                                                                <p class="mb-0 text-muted">896</p>

                                                                <h5 class="mt-0 mb-1 font-14"><b>Billing address</b></h5>
                                                                <p class="mb-0 text-muted">2821 Kensington Road, Avondale Estates, GA 30002 USA</p>

                                                            </td>

                                                            <td class="text-muted"> Origin notes / Destination notes</td>
                                                        </tr>

                                                        <!--end tr-->
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </div>
                                                <!--end table-->
                                            </div>
                                            <!--end /div-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <div class="row justify-content-left">
                                        <div class="col-lg-6">
                                            <!--<h6 class="mt-4"><b>Payment information</b> - Note:</h6>
                                            <ul class="ps-3">
                                                <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                            </ul>-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                            <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-end d-print-none"> <a href="javascript:window.print()"
                                                    class="btn btn-soft-info btn-sm">Print</a> <a href="#"
                                                    class="btn btn-soft-success btn-sm">Submit</a> 
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </fieldset>
                <!--end fieldset-->
                <!--end fieldset-->
                <h3>Trucker and drivers</h3>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="truck"></i> Trucker company</b></span><hr>
                          
                            <div class="row">
                                <label class="mb-1">Company name</label>
                                    <div class="input-group">
                                        <select style="width: 92%;" id="IdCompanyService" name="IdCompanyService" class="select2 form-control mb-3 custom-select">
                                        </select>
                                        <button class="btn btn-dark" type="button" id="SearchCompanyName"><i class="ti ti-reload"></i></button>
                                    </div>
                            </div>

                            <div class="row inputpadding">
                                  <div class="col-md-12" >
                                     <label class="mb-1">Company address</label>
                                       <input id="CompanyAddress" name="CompanyAddress" type="text"  class="form-control" placeholder="Input the company's address">
                                   </div>
                            </div>

                                <div class="row inputpadding">

                                         <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #1</label>
                                            <input id="CompanyPhone1" name="CompanyPhone1" type="tel"
                                                class="form-control" placeholder="+1 (555) 555-5555">
                                        </div>

                                        
                                         <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
                                            <input id="CompanyPhone2" name="CompanyPhone2" type="tel"
                                                class="form-control" placeholder="+1 (555) 555-5555">
                                        </div>
                                       
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-envelope"></i> Email</label>
                                            <input id="CompanyEmail" name="CompanyEmail" type="email"
                                                class="form-control" placeholder="ez@domain.com">
                                        </div>
                                </div>
                                <br>

                                <div class="row inputpadding">
                                        <span class="text-dark"><b><i class="fa fa-address-card fa-2x"></i> Drivers</b></span><hr>
                                            <div class="row">
                                                <label class="mb-1">Driver name</label>
                                                <div class="input-group">
                                                    <select style="width: 93%;" id="IdDriver" name="IdDriver" class="select2 form-control mb-3 custom-select"> </select>
                                                    <button class="btn btn-dark" type="button" id="SearchDriverName"><iconv_get_encoding class="ti ti-reload"></i></button>
                                                </div>
                                            </div>
                                </div>

                               
                                    <div class="row inputpadding">
                                        <div class="col-md-6" >
                                            <label class="mb-1"><i class="fa fa-mobile"></i> Driver phone #1</label>
                                            <input id="DriverPhone1" name="DriverPhone1" type="number"
                                                class="form-control" placeholder="+1 (555) 555-5555">
                                        </div>
                                      
                                        <div class="col-md-6" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Driver phone #2</label>
                                            <input id="DriverPhone2" name="DriverPhone2" type="number"
                                                class="form-control" placeholder="+1 (555) 555-5555">
                                        </div>

                                    </div>

                        </div>
                        <!--end col-->
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="dollar-sign"></i>Driver payment </b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     

                                            <div class="row">
                                                <div class="col-md-6" >
                                                    <label class="mb-1"><b>Total</b></label>
                                                    <input type="number" class="form-control" name="TotalOrder" id="TotalOrder"
                                                        placeholder="$0000" readonly>
                                                </div>
                                                <div class="col-md-3" >
                                                    <label class="mb-1"><b>Deposit</b></label>
                                                    <input id="DepositOrder" name="DepositOrder" type="number" class="form-control"
                                                        placeholder="$0000" readonly>
                                                </div>

                                                <div class="col-md-3" >
                                                  <label class="mb-1"><i class="fa fa-money-bill"></i><b class="text-success"> Earnings</b></label>
                                                  <input id="Earnings" name="Earnings" type="number" class="form-control" placeholder="$0000">
                                                 </div>

                                            </div><br>

                                            
                                                <div class="row">

                                                    <div class="col-md-6" >
                                                        <label class="mb-1">Cod</label>
                                                        <input id="Cod" name="Cod" type="number" class="form-control"
                                                            placeholder="$0000">
                                                    </div>

                                                    <div class="col-md-6" >
                                                        <label class="mb-1">Truker rate</label>
                                                        <input id="TrukerRate" name="TrukerRate" type="number" class="form-control"
                                                            placeholder="$0000">
                                                    </div>
                                                </div>

                                                <div class="row inputpadding">

                                                    <div class="col-md-6">
                                                        <label class="mb-1">Extra truker Fee</label>
                                                        <input id="ExtraTrukerFee" name="ExtraTrukerFee" type="number"
                                                            class="form-control" placeholder="$0000">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="mb-1"><i class="fa fa-truck" aria-hidden="true"></i> <b class="text-danger">Truker owes us</b></label>
                                                        <input id="TrukerOwesUs" name="TrukerOwesUs" type="number" class="form-control"  placeholder="$0000">
                                                    </div>
                                                </div>

                                                </div>
                                    </div>
                                </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-->
                    </div>

                    <!--end row-->
                 

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



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOHEjweqW61WAqGaXKZzuQS7sbOakgpT0&libraries=places">
</script>
<script src="plugins/select2/select2.min.js"></script>
<script src="plugins/jquery-steps/jquery.steps.min.js"></script>

<script src="assets/js/orders.js"></script>

<script type="text/javascript">
/*
if($(".select2").length > 0) {
	$('.select2').select2();
}*/


$("#form-horizontal").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slide"
});

//Execute select2 functions 
GetListCustomer();
GetListVehicles();
GetListDrivers();
GetListCompanyServices();

function AddVehicleList() {

    var div = $("#contentVehicle");

    div.find(".select2").each(function(index) {
        if ($(this).data('select2')) {
            $(this).select2('destroy');
        }
    });

    $('#templateVehiculo').clone().val('').appendTo("#contentVehicle");
    $('.select2').select2();
    //$(".BrandVehicle, .ModelVehicle").select2();
}

function EliminarVehiculo(e) {
    $(e).parent().parent().parent().remove();
}

//Input Search Select2
$(document).ready(function() {

    $('.select2').select2();

    $(".originInput, .DestinationInput").change(function() {
        $(this).css("border-color", "#A6A6A6");
    });

    $("body").addClass("enlarge-menu");

});

$("#SearchVehicles").click(function() {
    GetListVehicles();
});


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

//Destination Customer
$("#SearchDestinationCustomer, #SearchCustomerName").click(function() {
    GetListCustomer();
});


function GetListCustomer() {

    $.ajax({
        type: 'POST',
        url: "index.php?c=customers&a=GetListCustomers",
    }).then(function(response) {

        var data = JSON.parse(response);

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

        var optionDefault = new Option("Select origin customer", "", true, true);
        $('#IdCustomerOrigin').append(optionDefault);
        $('#IdCustomerOrigin').val("").trigger('change');

        $('#IdCustomerDestination').val("").trigger('change');
        var optionDefault2 = new Option("Select destination customer", "", true, true);
        $('#IdCustomerDestination').append(optionDefault2);

        $(".toast-success").html("Customer list ready");
        var myAlert = document.getElementById('toastSuccess');
        var bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();


        });
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

//

$("#SearchDriverName").click(function() {
    SearchDriverName();
});



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


function SearchDriverName(){

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

</script>