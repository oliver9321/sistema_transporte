<br>
<style>
    .modal-body {
    padding: 0.2rem !important;
}
</style>
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
                                    <input type="tel" class="form-control phone" id="Phone1NewCustomer"
                                        name="Phone1NewCustomer" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="Phone2NewCustomer">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control phone" id="Phone2NewCustomer"
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
                                    <input type="tel" class="form-control phone" id="CompanyPhone1NewCompany"
                                        name="CompanyPhone1NewCompany" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="CompanyPhone2NewCompany">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control phone" id="CompanyPhone2NewCompany"
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
                                    <input type="tel" class="form-control phone" id="DriverPhone1NewDriver"
                                        name="DriverPhone1NewDriver" placeholder="555-555-5555"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="DriverPhone2NewDriver">Phone #2</label>
                                <div class="input-group"> <span class="input-group-text"><i
                                            class="las la-phone"></i></span>
                                    <input type="tel" class="form-control phone id="DriverPhone2NewDriver"
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



<div class="modal-body bg-dark d-print-non">
    <div class="card">
        <div class="card-header d-print-none">
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
            <input type="text" name="Id" id="Id" value="" hidden>
                <h3>Basic info</h3>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="map-pin"></i> Origin information</b></span>
                            <hr>
                            <div class="row">
                                <div class="col-md-12" >
                                    <label class="mb-1">Origin customer name</label>
                                    <div class="input-group">
                                        <select style="width: 90%;" id="IdCustomerOrigin" name="IdCustomerOrigin" class="select2 form-control mb-3 custom-select originInput"> </select>
                                        <button class="btn btn-dark" type="button" id="SearchCustomerName"><i class="ti ti-reload"></i></button>
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
                                        <select style="width: 90%;" id="IdCustomerDestination" name="IdCustomerDestination" class="select2 form-control mb-3 custom-select DestinationInput"> </select>
                                        <button class="btn btn-dark" type="button" id="SearchDestinationCustomer"><i  class="ti ti-reload"></i></button>
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
                                        <input style="display:none;" />
                                        <input id="OriginAddress" name="OriginAddress" type="text" class="form-control originInput" placeholder="Ex. 12141 Pembroke Rd,..."  >
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
                                                    class="form-control originInput phone" placeholder="(555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone
                                                    #2</label>
                                                <input id="OriginPhone2" name="OriginPhone2" type="tel"
                                                    class="form-control originInput phone" placeholder="(555) 555-5555">
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
                                            <input style="display:none;" />
                                        <input id="DestinationAddress" name="DestinationAddress" type="text" class="form-control DestinationInput" placeholder="Ex. 1600 Pennsylvania...">
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
                                                    class="form-control DestinationInput phone"
                                                    placeholder="(555) 555-5555">
                                            </div>
                                            <!-- end row -->
                                            <div class="col-md-4" >
                                                <label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone
                                                    #2</label>
                                                <input id="DestinationPhone2" name="DestinationPhone2" type="tel"
                                                    class="form-control DestinationInput phone"
                                                    placeholder="(555) 555-5555">
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

                                                    <div class="row registroVehiculo" id="templateVehiculo" style="padding-bottom:20px !important" hidden>

                                                        <div class="col-sm-2" >
                                                            <label class="mb-1"><b>Brand</b></label>
                                                            <select style="width: 90%;" name="Brand"
                                                                class="select2 form-control mb-3 custom-select BrandVehicle vehicleList">
                                                                <option value="" selected>Select brand</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-sm-3" >
                                                            <label class="mb-1"><b>Model</b></label>
                                                            <select style="width: 90%;" name="Model"
                                                                class="select2 form-control mb-3 custom-select ModelVehicle vehicleList">
                                                                <option value="" selected>Select model</option>
                                                            </select>
                                                        </div>

                                                            <!--end col-->
                                                         <div class="col-sm-1" >
                                                            <label class="mb-1"><b>Year</b></label>
                                                            <input type="number"  min="1900" name="Year"  class="form-control YearVehicle vehicleList" placeholder="">
                                                        </div>

                                                              <!-- end row -->
                                                         <div class="col-sm-1" >
                                                            <label class="mb-1"><b>Color</b></label>
                                                            <select style="width: 100%;" name="Color" class="form-control ColorVehicle vehicleList">
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
                                                            <label class="mb-1"><b>Carrier</b></label>
                                                            <select style="width: 100%;" name="CarrierType" class="form-control CarrierTypeVehicle vehicleList">
                                                                <option value="" selected></option>
                                                                <option value="Open">Open</option>
                                                                <option value="Enclosed">Enclosed</option>
                                                            </select>
                                                        </div>

                                                

                                                        <div class="col-sm-1" >
                                                            <label class="mb-1"><b>Condition</b></label>
                                                            <select style="width: 100%;" name="ConditionVehicle" class="form-control ConditionVehicle vehicleList">
                                                                <option value="" selected></option>
                                                                <option value="Running">Running</option>
                                                                <option value="Non-running">Non-running</option>
                                                            </select>
                                                        </div>


                                                        <div class="col-sm-3" >
                                                        <label class="mb-1"><b>Vin</b></label>
                                                            <div class="input-group">
                                                                <input type="text" name="Vin" class="form-control VinVehicle vehicleList">
                                                                <button type="button" title="Delete vehicle" onclick="EliminarVehiculo(this)"  class="btn btn-outline-danger"> <span class="far fa-trash-alt me-1"></span> </button>
                                                            </div>
                                                        </div>

                                                        <!--end col-->

                                                        </div>

                                                    <!--- HASTA AQUI-->
                                                        <div class="col-md-12" id="contentVehicle" style="overflow-y: auto; height:210px"></div>
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
                        <div class="col-md-6"> <span class="text-dark"><b><i data-feather="credit-card"></i> Credit Card info</b></span>
                            <hr>
                            <div class="row">	

                                <div class="col-md-6" >
                                    <label class="mb-1"> Card holder name</label>
                                    <input type="text" class="form-control" name="CardHolderName" id="CardHolderName" style="text-transform:uppercase">
                                </div>

                                <div class="col-md-6" >
                                    <label class="mb-1"> Payment Owner Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="PaymentOwnerName" id="PaymentOwnerName">
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

                                            <input style="display:none;" />
                                            <input id="BillingAddress" name="BillingAddress" type="text" class="form-control" placeholder="Ex. 12141 Pembroke Rd...." autocomplete="disabled">
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
                                            <input id="Tel1" name="Tel1" type="tel" class="form-control phone"
                                                placeholder="(555) 555-5555">
                                        </div>
                                        <!-- end row -->
                                        <div class="col-md-4" >
                                            <label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #2</label>
                                            <input id="Tel2" name="Tel2" type="tel" class="form-control phone"
                                                placeholder="(555) 555-5555">
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

                <h3>Confirm order</h3>
                <fieldset>
                    <div class="row">
                        <div class="col-lg-12 mx-auto" id="zonaPrint">
                            <div class="card">
                                <div class="card-body invoice-head">
                                    <div class="row">

                                        <div class="card mb-0" style="border:0px solid rgba(0, 0, 0, 0.125) !important">
                                               
                                            <div class="row g-1">
                                                    
                                                    <div class="col-md-3 align-self-center">
                                                        <img src="assets/images/logopdf1.png" alt="LogoPdf1" class="img-fluid">
                                                    </div><!--end col-->

                                                    <div class="col-md-4 ms-auto align-self-center">
                                                        <div class="card-body">
                                                            <p class="card-text mb-0 text-muted"><i class="mdi mdi-web text-dark"></i> www.ezautotransportationusa.com</p>
                                                            <p class="card-text mb-0 text-muted"><i class="mdi mdi-phone text-dark"></i> +1-888-888-8888</p>
                                                            <p class="card-text mb-0 text-muted"><i class="mdi mdi-map-marker text-dark"></i> 2821 Kensington Road, Avondale Estates, GA 30002 USA.</p>
                                                        </div>
                                                    </div><!--end col-->

                                                </div><!--end row-->

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
                                                <h6 class="mb-0"><b>Order number: </b><span id="OrderIDForm">Pending to save</span></h6>
                                                <h6 class="mb-0"><b>Order date: </b><span id="OrderDateForm">0000-00-00</span></h6>
                                                <h6 class="mb-0"><b>Pick up date: </b><span id="PickUpDateForm">0000-00-00</span></h6>
                                                <h6 class="mb-0"><b>Delivery date: </b><span id="DeliveryDateForm">0000-00-00</span></h6><br>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="float-left">
                                                <address class="font-13">
                                                    <strong class="font-14">Origin:</strong><br>
                                                    <b id="OriginNameForm">Field empty</b><br>
                                                    <span><i class="fa fa-map-marker-alt"></i> </span><i id="OriginAddressForm">Field empty</i><br>
                                                    <span title="Phone"><i class="fa fa-phone-alt"></i>  <span id="OriginPhone1Form"></span> <span id="OriginPhone2Form"></span></span>
                                                </address>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div class="">
                                            <address class="font-13">
                                                    <strong class="font-14">Destination:</strong><br>
                                                    <b id="DestinationNameForm">Field empty</b><br>
                                                    <span><i class="fa fa-map-marker-alt"></i> </span><i id="DestinationAddressForm">Field empty</i><br>
                                                    <span title="Phone"><i class="fa fa-phone-alt"></i>  <span id="DestinationPhone1Form"></span> <span id="DestinationPhone2Form"></span></span>
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
                                                    <tbody id="ListVehiclesPDF">
                                                        <!--end tr-->
                                                    </tbody>
                                                    <tfoot>
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
                                                            <td class="border-0 font-14" style="text-align:right !important"><b>Total</b></td>
                                                            <td class="border-0 font-14"><b id="TotalForm">$00.00</b></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <br>

                                             
                                                <!--end table-->
                                            </div>
                                            <!--end /div-->
                                        </div>
                                        <!--end col-->
                                    </div>

                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive project-invoice">
                                                    <table class="table mb-0" border="0" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th style="border-style: none;"><b><i class="fa fa-money-check"></i> Payment information</b></th>
                                                            <tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="border-style: none;">
                                                                    <h6 class="mt-0 mb-1 font-14"><b>Card holder name</b></h6>
                                                                    <p class="mb-0 text-muted" id="CardHolderNameForm"></p>
                                                                </td>

                                                                <td style="border-style: none;"> 
                                                                    <h5 class="mt-0 mb-1 font-14"><b>Credit card number</b></h5>
                                                                    <p class="mb-0 text-muted" id="CreditCardNumberForm"></p>
                                                                </td>

                                                                <td style="border-style: none;">
                                                                    <h5 class="mt-0 mb-1 font-14"><b>Billing address</b></h5>
                                                                    <p class="mb-0 text-muted" id="BillingAddressForm"></p>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td style="border-style: none;">
                                                                    <h5 class="mt-0 mb-1 font-14"><b>Expiration date</b></h5>
                                                                    <p class="mb-0 text-muted" id="ExperationDateForm"></p>
                                                                </td>

                                                                <td  style="border-style: none;">
                                                                    <h5 class="mt-0 mb-1 font-14"><b>CVV</b></h5>
                                                                    <p class="mb-0 text-muted" id="CVVForm"></p>
                                                                </td>

                                                            </tr>

                                                            <!--end tr-->
                                                        </tbody>   
                                                    </table>
                                        </div>
                                    </div>
                                    
                                    </div>

                                    <div class="row">
                                         <div class="col-md-8" style="width: 900px;">
                                            <div class="card-body">
                                                <span class="d-flew justify-content" id="OriginDestinationNotesForm"></span>
                                            </div>
                                         </div>
                                    </div>
                                    <!--end row-->
                                    <hr>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                            <div class="text-center text-muted"><small class="font-12">Thank you very much for doing business with us.</small></div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12 col-xl-4">
                                            <div class="float-end d-print-none"> 
                                            <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">Print</a> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">

$(document).ready(function($){
    $('.phone').mask('(000) 000-0000');
    $("#ExpDate").mask('00/00');
    $("#Cvv").mask('000');
    $("#CreditCard").mask("0000 0000 0000 0000");
});


$("#form-horizontal").steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slide"
});

//Execute select2 functions 
GetListCustomer();
GetListVehicles();

function AddVehicleList() {

    var div = $("#contentVehicle");
   // templateVehiculo

    div.find(".select2").each(function(index) {
        if ($(this).data('select2')) {
            $(this).select2('destroy');
        }
    });

    $('#templateVehiculo').find(".select2").each(function(index) {
        if ($(this).data('select2')) {
            $(this).select2('destroy');
        }
    });


   var clonado =  $('#templateVehiculo').clone().val('');
   clonado.removeAttr('hidden');
   clonado.appendTo("#contentVehicle");
   $(clonado).find(".select2").select2();

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
    AddVehicleList();
    
    $(".steps").addClass("d-print-none");
    $(".actions").addClass("d-print-none");
    $("#ListVehiclesPDF").html("");

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
 
    $("#OrderDateForm").text($("#PickUpOrderDateDate").val());
    $("#ListVehiclesPDF").html("");

    //Origin Info
    $("#OriginNameForm").html($("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) != "" ? $("#IdCustomerOrigin :selected").text().substr(0, $("#IdCustomerOrigin :selected").text().indexOf("-")) : "<span class='text-danger'>Check origin customer name</span>");
    
    $("#OriginAddressForm").html($("#OriginAddress").val() != "" ? $("#OriginAddress").val() :  "<span class='text-danger'>Check origin address</span>");

    $("#PickUpDateForm").html($("#PickUpDate").val() != "" ? $("#PickUpDate").val() :  "<span class='text-danger'>Check pick up date</span>");
    $("#DeliveryDateForm").html($("#DeliveryDate").val() != "" ? $("#DeliveryDate").val() :  "<span class='text-danger'>Check delivery date</span>");

    if($("#OriginZip").val() != ""){
        $("#OriginAddressForm").html($("#OriginAddress").val() != "" ? $("#OriginAddress").val() + "<br> Zip code: "+$("#OriginZip").val() :  "<span class='text-danger'>Check origin address</span>");
    }
   
    $("#OriginPhone1Form").html($("#OriginPhone1").val() != "" ? $("#OriginPhone1").val() :  "<span class='text-danger'>Check origin phone1</span>");
    $("#OriginPhone2Form").html($("#OriginPhone2").val() != "" ? "/ "+$("#OriginPhone2").val() :  "");

    
    //Destination Info
    $("#DestinationNameForm").html($("#IdCustomerDestination :selected").text().substr(0, $("#IdCustomerDestination :selected").text().indexOf("-")) != "" ? $("#IdCustomerDestination :selected").text().substr(0, $("#IdCustomerDestination :selected").text().indexOf("-")) : "<span class='text-danger'>Check destination customer name</span>");
    
    $("#DestinationAddressForm").html($("#DestinationAddress").val() != "" ? $("#DestinationAddress").val() :  "<span class='text-danger'>Check destination address</span>");

    if($("#DestinationZip").val() != ""){
        $("#DestinationAddressForm").html($("#DestinationAddress").val() != "" ? $("#DestinationAddress").val() + "<br> Zip code: "+$("#DestinationZip").val() :  "<span class='text-danger'>Check destination address</span>");
    }
   
    $("#DestinationPhone1Form").html($("#DestinationPhone1").val() != "" ? $("#DestinationPhone1").val() :  "<span class='text-danger'>Check destination phone1</span>");
    $("#DestinationPhone2Form").html($("#DestinationPhone2").val() != "" ? "/ "+$("#DestinationPhone2").val() :  "");


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

     $("#ListVehiclesPDF").append(markup);

     //Payment info
    $("#TotalForm").html($("#Total").val() != "" ? "US$ "+$("#Total").val() :  "<span class='text-danger'>Check total payment</span>");
    $("#CardHolderNameForm").html($("#CardHolderName").val() != "" ? $("#CardHolderName").val() :  "<span class='text-danger'>Check card holder name</span>");
    $("#CreditCardNumberForm").html($("#CreditCard").val() != "" ? $("#CreditCard").val() :  "<span class='text-danger'>Check credit card number</span>");
    $("#ExperationDateForm").html($("#ExpDate").val() != "" ? $("#ExpDate").val() :  "<span class='text-danger'>Check experation date</span>");
    $("#CVVForm").html($("#Cvv").val() != "" ? $("#Cvv").val() :  "<span class='text-danger'>Check CVV code</span>");
    $("#BillingAddressForm").html($("#BillingAddress").val() != "" ? $("#BillingAddress").val() :  "<span class='text-danger'>Check billing address</span>");

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
    $("#OriginDestinationNotesForm").html(OriginDestinationNote != "" ? OriginDestinationNote :  "");
                                                  
}

function saveOrder(){

    vehiclesArray = new Array();

    $(".registroVehiculo").each(function(){
       
       Brand       = $(this).find("select[name='Brand']").val();
       Vin         = $(this).find("input[name^='Vin']").val();
       Model       = $(this).find("select[name='Model']").val();
       Color       = $(this).find("select[name='Color']").val();
       Year        = $(this).find("input[name='Year']").val();
       ConditionVehicle   = $(this).find("select[name='ConditionVehicle']").val();
       CarrierType = $(this).find("select[name='CarrierType']").val();
       
       if(Brand!=""){
           vehiclesArray.push({'Brand':Brand, 'Model':Model, 'Year':Year, 'Color':Color, 'ConditionVehicle':ConditionVehicle,'CarrierType':CarrierType, 'Vin':Vin  });
       }
});


    $.ajax({
        type: 'POST',
        url: "index.php?c=orders&a=SaveOrder",
        data: {'order': $("#form-horizontal").serialize(), 'vehicles': vehiclesArray},
            success: function(data) {
                
                if(data){

                    var response = JSON.parse(data);
                 
                    console.log(response);
                    if(response.Error == false){

                        $("#OrderIDForm").html(response.OrderId);
                        $(".toast-success").html(response.Message);
                        var myAlert = document.getElementById('toastSuccess');
                        var bsAlert = new bootstrap.Toast(myAlert);
                        bsAlert.show();
                        setTimeout(() => { bsAlert.hide();}, 3000);
                        setTimeout(() => {window.print();}, 4000);

                    }else{

                        $(".toast-error").html(response.Message);
                        var myAlert = document.getElementById('toastError');
                        var bsAlert = new bootstrap.Toast(myAlert);
                        bsAlert.show();

                    }
                }else{
                    console.log(data);
                }
            }
        })

}

</script>