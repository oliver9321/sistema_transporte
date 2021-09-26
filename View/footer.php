</div>
<!-- container -->
<footer class="footer text-center text-sm-start"> &copy;
	<script>
	document.write(new Date().getFullYear())
	</script>
	<?=NOMBRE_APLICATION." ".VERSION ?> - <span class="text-danger"><?=MODE?></span><span class="text-muted d-none d-sm-inline-block float-end">developed by
        <i class="mdi mdi-heart text-danger"></i>devsarrollando.org</span> </footer>
<!--end footer-->
</div>
<!-- end page content -->

<!-- MODAL DE ORDENES -->
<div class="modal fade ModalNewOrder" id="ModalNewOrder"  role="dialog" aria-labelledby="ModalNewOrderLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title m-0" id="ModalNewOrderLabel">Order management</h6>
				<!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
			</div>
			<!--end modal-header-->
			<div class="modal-body">
				<div class="card">
					<div class="card-header">
						<button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#ModalNewCustomer"><i class="fas fa-user-plus me-2"></i>New customer</button>
						<button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#ModalNewVehicle"><i class="fas fa-car me-2"></i>New vehicle</button>
						<button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#ModalNewCompanyService"><i class="fas fa-building me-2"></i>New company</button>
                        <button type="button" class="btn btn-sm btn-soft-primary" data-bs-toggle="modal" data-bs-target="#ModalNewDriver"><i class="fa fa-address-card me-2"></i>New driver</button>
                </div>
					<!--end card-header-->
					<div class="card-body">
						<form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
							<h3>Basic info</h3>
							<fieldset>
								<div class="row">
									<div class="col-md-6"> <span class="text-dark"><b><i data-feather="map-pin"></i> Origin Information</b></span>
										<hr>
										<div class="row">
											<div class="col-md-12" style="position: relative;">
												<label class="mb-1">Origin customer name</label>
												<div class="input-group">
                                            		<select  style="width: 90%;" id="IdCustomerOrigin" name="IdCustomerOrigin" class="form-control originInput" aria-describedby="button-addon1">
														<option value="" selected>Select customer origin</option>
													</select>
													<button class="btn btn-dark" type="button" id="SearchCustomerName"><i class="ti ti-reload"></i></button>
                                        		</div>
											</div>
										</div><!-- end row -->
										<br> 
									</div>
									<!--end col-->
									<div class="col-md-6"> <span class="text-dark"><b><i data-feather="arrow-right-circle"></i> Destination
                                                Information</b></span>
										<hr>
										<div class="row">

										<div class="col-md-12" style="position: relative;">
										<label class="mb-1">Destination customer name</label>
												<div class="input-group">
                                            	<select  style="width: 90%;" id="IdCustomerDestination" name="IdCustomerDestination" class="form-control" aria-describedby="button-addon1">
												<option value="" selected>Select customer destination</option>
												</select>
													<button class="btn btn-dark" type="button" id="SearchDestinationCustomer"><i class="ti ti-reload"></i></button>
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
												<div class="col-md-12" style="position: relative;">
													<label class="mb-1"><i class="fa fa-map-marker-alt"></i> Origin address</label>
													<input id="OriginAddress" name="OriginAddress" type="text" class="form-control originInput" placeholder="Ex. 12141 Pembroke Rd,..."> 
													</div>
												<!-- end row -->
											</div>
											<br>
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Origin city</label>
															<input id="OriginCity" name="OriginCity" type="text" class="form-control originInput" placeholder="City"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Origin state</label>
															<input id="OriginState" name="OriginState" type="text" class="form-control originInput" placeholder="State"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Origin zip code</label>
															<input id="OriginZip" name="OriginZip" type="text" class="form-control originInput" placeholder="00000"> </div>
														<!-- end row -->
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone #1</label>
															<input id="OriginPhone1" name="OriginPhone1" type="tel" class="form-control originInput" placeholder="+1 (555) 555-5555"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1"><i class="fa fa-phone-alt"></i> Origin phone #2</label>
															<input id="OriginPhone2" name="OriginPhone2" type="tel" class="form-control originInput" placeholder="+1 (555) 555-5555"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Origin email</label>
															<input id="OriginEmail" name="OriginEmail" type="email" class="form-control originInput" placeholder="cus@domain.com"> </div>
														<!-- end row -->
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-12" style="position: relative;">
													<label class="mb-1"><i class="fa fa-sticky-note"></i> Origin note</label>
													<textarea id="OriginNote" name="OriginNote" class="form-control originInput" placeholder="Opcional information"></textarea>
												</div>
												<!-- end row -->
											</div>
											<br> </div>
										<div class="col-md-6">
											<div class="row">
												<div class="col-md-12" style="position: relative;">
													<label class="mb-1"><i class="fa fa-map-marker-alt"></i> Destination address</label>
													<input id="DestinationAddress" name="DestinationAddress" type="text" class="form-control DestinationInput" placeholder="Ex. 1600 Pennsylvania..."> </div>
												<!-- end row -->
											</div>
											<br>
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Destination city</label>
															<input id="DestinationCity" name="DestinationCity" type="text" class="form-control DestinationInput" placeholder="City"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Destination state</label>
															<input id="DestinationState" name="DestinationState" type="text" class="form-control DestinationInput" placeholder="State"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Destination zip code</label>
															<input id="DestinationZip" name="DestinationZip" type="text" class="form-control DestinationInput" placeholder="00000"> </div>
														<!-- end row -->
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone #1</label>
															<input id="DestinationPhone1" name="DestinationPhone1" type="tel" class="form-control DestinationInput" placeholder="+1 (555) 555-5555"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1"><i class="fa fa-phone-alt"></i> Destination phone #2</label>
															<input id="DestinationPhone2" name="DestinationPhone2" type="tel" class="form-control DestinationInput" placeholder="+1 (555) 555-5555"> </div>
														<!-- end row -->
														<div class="col-md-4" style="position: relative;">
															<label class="mb-1">Destination email</label>
															<input id="DestinationEmail" name="DestinationEmail" type="email" class="form-control DestinationInput" placeholder="cus@domain.com"> </div>
														<!-- end row -->
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-md-12" style="position: relative;">
													<label class="mb-1"><i class="fa fa-sticky-note"></i> Destination note</label>
													<textarea id="DestinationNote" name="DestinationNote" class="form-control DestinationInput" placeholder="Opcional information"></textarea>
												</div>
												<!-- end row -->
											</div>
											<br> </div>
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
														<input id="PickUpDate" name="PickUpDate" type="date" class="form-control"> </div>
													<!-- end row -->
													<div class="col-md-6" style="position: relative;">
														<label class="mb-1"><b>Delivery date</b></label>
														<input id="DeliveryDate" name="DeliveryDate" type="date" class="form-control"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br> </div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6" style="position: relative;">
														<label class="mb-1"><b>Order date</b></label>
														<input id="PickUpOrderDateDate" name="OrderDate" type="date" class="form-control"> </div>
													<!-- end row -->
													<div class="col-md-6" style="position: relative;">
														<label class="mb-1"><b>Order status</b></label>
														<input id="OrderStatusID" name="OrderStatusID" type="text" class="form-control" placeholder="Open"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br> </div>
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<p class="text-muted mb-0"> <span data-repeater-create="" class="btn btn-sm btn-outline-primary">
                                                                                        <span class="fas fa-plus"></span> </span> <b class="text-dark">Add vehicles to order</b></p>
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
																			</div>
																			<!-- end row -->
																			<div class="col-sm-2" style="position: relative;">
																				<label class="mb-1">Model</label>
																				<select id="Model" name="Model" class="form-select">
																					<option value="volkswagon" selected="">Volkswagon</option>
																					<option value="honda">Honda</option>
																					<option value="ford">Ford</option>
																				</select>
																			</div>
																			<!-- end row -->
																			<div class="col-sm-2" style="position: relative;">
																				<label class="mb-1">Color</label>
																				<input type="text" name="Color" id="Color" value="Beetle" class="form-control"> </div>
																			<!--end col-->
																			<div class="col-sm-1" style="position: relative;">
																				<label class="mb-1">Year</label>
																				<input type="tel" name="Year" id="Year" class="form-control" placeholder="<?=date(" Y ") ?>"> </div>
																			<!--end col-->
																			<div class="col-sm-4" style="position: relative;">
																				<label class="mb-1">Vin</label>
																				<input type="text" name="Vin" id="Vin" class="form-control"> </div>
																			<div class="col-sm-1" style="position: relative;">
																				<br>
																				<button type="button" data-repeater-delete="" class="btn btn-outline-danger"> <span class="far fa-trash-alt me-1"></span> </button>
																			</div>
																			<!--end col-->
																		</div>
																		<br> </div>
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
											<div class="col-md-12" style="position: relative;">
												<label class="mb-1">Card holder name</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="Input the name of card" name="CardHolderName" id="CardHolderName">
													<button class="btn btn-dark" type="button" id="SearchCardHolderName"><i class="fas fa-search"></i></button>
												</div>
											</div>
											<!-- end row -->
										</div>
										<br> </div>
									<!--end col-->
									<div class="col-md-6"> <span class="text-dark"><b><i data-feather="dollar-sign"></i> Payment</b></span>
										<hr>
										<div class="row">
											<div class="col-md-6" style="position: relative;">
												<label class="mb-1">Total</label>
												<input type="number" class="form-control" name="Total" id="Total" placeholder="$0000"> </div>
											<div class="col-md-6" style="position: relative;">
												<label class="mb-1">Deposit</label>
												<input id="Deposit" name="Deposit" type="number" class="form-control" placeholder="$0000"> </div>
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
													<div class="col-md-5" style="position: relative;">
														<label class="mb-1">Credit card number</label>
														<input id="CreditCard" name="CreditCard" type="text" class="form-control" placeholder="#### #### #### ####"> </div>
													<!-- end row -->
													<div class="col-md-3" style="position: relative;">
														<label class="mb-1">Expiration date</label>
														<input id="ExpDate" name="ExpDate" type="text" class="form-control" placeholder="00/00"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">CVV</label>
														<input id="Cvv" name="Cvv" type="text" class="form-control" placeholder="000"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8" style="position: relative;">
														<label class="mb-1">Biling address</label>
														<input id="BilingAddress" name="BilingAddress" type="text" class="form-control" placeholder="Ex. 12141 Pembroke Rd...."> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Reference</label>
														<input id="Reference" name="Reference" type="text" class="form-control" placeholder="0000000"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #1</label>
														<input id="Tel1" name="Tel1" type="tel" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1"><i class="fa fa-phone-alt"></i> Phone number #2</label>
														<input id="Tel2" name="Tel2" type="tel" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Email</label>
														<input id="PaymentEmail" name="PaymentEmail" type="email" class="form-control" placeholder="ez@domain.com"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12" style="position: relative;">
												<label class="mb-1">Payment Note</label>
												<textarea id="PaymentNote" name="PaymentNote" class="form-control" placeholder="Opcional information"></textarea>
											</div>
											<!-- end row -->
										</div>
										<br> </div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Extra truker Fee</label>
														<input id="ExtraTrukerFee" name="ExtraTrukerFee" type="number" class="form-control" placeholder="$0000"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Cod</label>
														<input id="Cod" name="Cod" type="number" class="form-control" placeholder="$0000"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Truker rate</label>
														<input id="TrukerRate" name="TrukerRate" type="number" class="form-control" placeholder="$0000"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Earnings</label>
														<input id="Earnings" name="Earnings" type="number" class="form-control" placeholder="$0000"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br> </div>
								</div>
							</fieldset>
							<!--end fieldset-->
							<h3>Trucker and Drivers</h3>
							<fieldset>
								<div class="row">
									<div class="col-md-6"> <span class="text-dark"><b><i data-feather="truck"></i> Trucker company</b></span>
										<hr>
										<div class="row">
											<div class="col-md-12" style="position: relative;">
												<label class="mb-1">Trucker's company name</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="Input the company service's name" name="CompanyName" id="CompanyName">
													<button class="btn btn-dark" id="SearchCompanyName" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
												</div>
											</div>
											<!-- end row -->
										</div>
									</div>
									<!--end col-->
									<div class="col-md-6"> <span class="text-dark"><b><i data-feather="users"></i> Drivers</b></span>
										<hr>
										<div class="row">
											<div class="col-md-12" style="position: relative;">
												<label class="mb-1">Driver's name</label>
												<div class="input-group mb-3">
													<input type="text" class="form-control" placeholder="Input the driver's name" name="DriverName" id="DriverName">
													<button class="btn btn-dark" id="SearchDriverName" type="button"><i class="fas fa-search"></i></button>
												</div>
											</div>
											<!-- end row -->
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
														<input id="CompanyAddress" name="CompanyAddress" type="text" class="form-control" placeholder="Input the company's address"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #1</label>
														<input id="CompanyPhone1" name="CompanyPhone1" type="tel" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
														<input id="CompanyPhone2" name="CompanyPhone2" type="tel" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
													<div class="col-md-4" style="position: relative;">
														<label class="mb-1">Email</label>
														<input id="CompanyEmail" name="CompanyEmail" type="email" class="form-control" placeholder="ez@domain.com"> </div>
													<!-- end row -->
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
														<input id="DriverPhone1" name="DriverPhone1" type="number" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
													<div class="col-md-6" style="position: relative;">
														<label class="mb-1"><i class="fa fa-phone-alt"></i> Phone #2</label>
														<input id="DriverPhone2" name="DriverPhone2" type="number" class="form-control" placeholder="+1 (555) 555-5555"> </div>
													<!-- end row -->
												</div>
											</div>
										</div>
										<br> </div>
								</div>
							</fieldset>
							<!--end fieldset-->
							<h3>Confirm Order</h3>
							<fieldset>
								<div class="row">
									<div class="col-lg-12 mx-auto">
										<div class="card">
											<div class="card-body invoice-head">
												<div class="row">
													<div class="col-md-3 align-self-center">
														<!--<img src="assets/images/logoTransport.png" alt="logo-small" class="logo-sm me-1" height="24">--><img src="assets/images/logoTransport.png" alt="logo-large" class="logo-lg logo-dark" height="150">
														<!--<img src="assets/images/logoTransport.png" alt="logo-large" class="logo-lg logo-light" height="20">-->
														<!--<p class="mt-2 mb-0 text-muted">Ez Auto Transportation</p>-->
													</div>
													<!--end col-->
													<div class="col-md-8">
														<br>
														<ul class="list-inline mb-0 contact-detail float-end">
															<li class="list-inline-item">
																<div class="ps-3">
																	<p class="text-muted mb-0"><i class="mdi mdi-web"></i> www.ezautotransportationusa.com</p>
																</div>
															</li>
															<li class="list-inline-item">
																<div class="ps-3">
																	<p class="text-muted mb-0"><i class="mdi mdi-phone"></i> +123 123456789</p>
																</div>
															</li>
															<li class="list-inline-item">
																<div class="ps-3">
																	<p class="text-muted mb-0"><i class="mdi mdi-map-marker"></i> 2821 Kensington Road, Avondale Estates, GA 30002 USA.</p>
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
															<h6><b>Order ID :</b> # 23654789</h6> </div>
													</div>
													<!--end col-->
													<div class="col-md-4">
														<div class="float-left"> <address class="font-13">
                                                    <strong class="font-14">Billed To :</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address> </div>
													</div>
													<!--end col-->
													<div class="col-md-4">
														<div class=""> <address class="font-13">
                                                    <strong class="font-14">Shipped To:</strong><br>
                                                    Joe Smith<br>
                                                    795 Folsom Ave<br>
                                                    San Francisco, CA 94107<br>
                                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                                </address> </div>
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
																	</tr>
																	<tr>
																		<td colspan="2" class="border-0"></td>
																		<td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
																		<td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
																	</tr>
																	<!--end tr-->
																	<tr>
																		<th colspan="2" class="border-0"></th>
																		<td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
																		<td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
																	</tr>
																	<!--end tr-->
																	<tr class="bg-black text-white">
																		<th colspan="2" class="border-0"></th>
																		<td class="border-0 font-14"><b>Total</b></td>
																		<td class="border-0 font-14"><b>$82,000.00</b></td>
																	</tr>
																	<!--end tr-->
																</tbody>
															</table>
															<!--end table-->
														</div>
														<!--end /div-->
													</div>
													<!--end col-->
												</div>
												<!--end row-->
												<div class="row justify-content-left">
													<div class="col-lg-6">
														<h6 class="mt-4">Payment information - Note:</h6>
														<ul class="ps-3">
															<li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
															<li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                                <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>
														</ul>
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
														<div class="float-end d-print-none"> <a href="javascript:window.print()" class="btn btn-soft-info btn-sm">Print</a> <a href="#" class="btn btn-soft-primary btn-sm">Submit</a> <a href="#" class="btn btn-soft-danger btn-sm">Cancel</a> </div>
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
			<div class="modal-footer">
                <button type="button" class="btn btn-soft-danger btn-sm" onclick="$('input, textarea').val('');">Clear All fields</button>
               <!-- <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button>-->
            </div>
				<!--end modal-footer-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	<!--end modal-->
    
	<div class="modal fade" id="ModalNewCustomer"  role="dialog" aria-labelledby="ModalNewCustomerLabel" aria-hidden="true">
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
									<select style="width: 100%;" id="IdCustomerTypeNewCustomer" name="IdCustomerTypeNewCustomer" class="select2 form-control custom-select">
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
									<input class="form-control" type="text" id="NameNewCustomer" name="NameNewCustomer"> </div>
								<div class="mb-1">
									<label class="form-label" for="LastNameNewCustomer">Last name:</label>
									<input class="form-control" type="text" id="LastNameNewCustomer" name="LastNameNewCustomer"> </div>
								<div class="mb-1">
									<label class="form-label text-danger" for="Phone1NewCustomer">*Phone #1</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="Phone1NewCustomer" name="Phone1NewCustomer" placeholder="555-555-5555" aria-describedby="basic-addon1"> </div>
								</div>
								<div class="mb-1">
									<label class="form-label" for="Phone2NewCustomer">Phone #2</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="Phone2NewCustomer" name="Phone2NewCustomer" placeholder="555-555-5555" aria-describedby="basic-addon1"> </div>
								</div>
								<div class="mb-1">
									<label class="form-label" for="EmailNewCustomer">Email address</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-at"></i></span>
										<input type="email" class="form-control" id="EmailNewCustomer" name="EmailNewCustomer" placeholder="customer@domain.com" aria-describedby="basic-addon1"> </div>
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

	<div class="modal fade" id="ModalNewVehicle"  role="dialog" aria-labelledby="ModalNewVehicleLabel" aria-hidden="true">
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
									<input class="form-control" type="text" id="BrandNewVehicle" name="BrandNewVehicle"> </div>
								<div class="mb-1">
									<label class="form-label text-danger" for="ModelNewVehicle">*Model:</label>
									<input class="form-control" type="text" id="ModelNewVehicle" name="ModelNewVehicle"> </div>
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

	<div class="modal fade" id="ModalNewCompanyService"  role="dialog" aria-labelledby="ModalNewCompanyServiceLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-info">
					<h6 class="modal-title m-0" id="ModalNewCompanyServiceLabel"> <i class="fas fa-user-plus me-2"></i> New Company</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="card-body">

								<div class="mb-1">
									<label class="form-label text-danger" for="CompanyNameNewCompany">*Company name:</label>
									<input class="form-control" type="text" id="CompanyNameNewCompany" name="CompanyNameNewCompany"> 
                                 </div>

								<div class="mb-1">
									<label class="form-label text-danger" for="CompanyAddressNewCompany">*Address:</label>
									<input class="form-control" type="text" id="CompanyAddressNewCompany" name="CompanyAddressNewCompany"> 
                                 </div>

								<div class="mb-1">
									<label class="form-label text-danger" for="CompanyPhone1NewCompany">*Phone #1</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="CompanyPhone1NewCompany" name="CompanyPhone1NewCompany" placeholder="555-555-5555" aria-describedby="basic-addon1"> 
                                     </div>
								</div>

								<div class="mb-1">
									<label class="form-label" for="CompanyPhone2NewCompany">Phone #2</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="CompanyPhone2NewCompany" name="CompanyPhone2NewCompany" placeholder="555-555-5555" aria-describedby="basic-addon1"> 
                                    </div>
								</div>

								<div class="mb-1">
									<label class="form-label" for="CompanyEmailNewCompany">Email address</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-at"></i></span>
										<input type="email" class="form-control" id="CompanyEmailNewCompany" name="CompanyEmailNewCompany" placeholder="customer@domain.com" aria-describedby="basic-addon1"> 
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

    <div class="modal fade" id="ModalNewDriver"  role="dialog" aria-labelledby="ModalNewDriverLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-info">
					<h6 class="modal-title m-0" id="ModalNewDriverLabel"> <i class="fa fa-address-card me-2"></i> New driver</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<!--end modal-header-->
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="card-body">

								<div class="mb-1">
									<label class="form-label text-danger" for="DriverNameNewDriver">*Driver name:</label>
									<input class="form-control" type="text" id="DriverNameNewDriver" name="DriverNameNewDriver"> 
                                 </div>

								<div class="mb-1">
									<label class="form-label text-danger" for="DriverPhone1NewDriver">*Phone #1</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="DriverPhone1NewDriver" name="DriverPhone1NewDriver" placeholder="555-555-5555" aria-describedby="basic-addon1"> 
                                     </div>
								</div>

								<div class="mb-1">
									<label class="form-label" for="DriverPhone2NewDriver">Phone #2</label>
									<div class="input-group"> <span class="input-group-text"><i class="las la-phone"></i></span>
										<input type="tel" class="form-control" id="DriverPhone2NewDriver" name="DriverPhone2NewDriver" placeholder="555-555-5555" aria-describedby="basic-addon1"> 
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
		<div id="toastSuccess" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="d-flex">
				<div class="toast-body toast-success">
					<!-- Message from js -->
				</div>
				<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
		</div>
		<div id="toastError" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="d-flex">
				<div class="toast-body toast-error">
					<!-- Message from js -->
				</div>
				<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
		</div>
	</div>

</div>
 </div>

<!-- FIN -->

</body>

</html>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOHEjweqW61WAqGaXKZzuQS7sbOakgpT0&libraries=places"></script>
<script src="plugins/select2/select2.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metismenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/simplebar.min.js"></script>
<script src="assets/js/moment.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/jquery-steps/jquery.steps.min.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="assets/js/orders.js"></script>

<script>


if($(".select2").length > 0) {
	$('.select2').select2();
}

$("#form-horizontal").steps({
	headerTag: "h3",
	bodyTag: "fieldset",
	transitionEffect: "slide"
});

//Input Search Select2
$(document).ready(function() {

function GetListCustomerOrigin(){

$.ajax({
    type: 'POST',
	url: "index.php?c=customers&a=GetListCustomers",
}).then(function (response) {

   		 var data = JSON.parse(response);

			if(data.length > 0){

					data.forEach(element => {
					   var optionBucle = new Option(element.Customer, element.Id, true, true);
						$('#IdCustomerOrigin').append(optionBucle); //.trigger('change');
					});
			}
			$('#IdCustomerOrigin').val("").trigger('change');
});

}


function GetListCustomerDestination(){

$.ajax({
    type: 'POST',
	url: "index.php?c=customers&a=GetListCustomers",
}).then(function (response) {

   		 var data = JSON.parse(response);

			if(data.length > 0){

					data.forEach(element => {
					   var optionBucle = new Option(element.Customer, element.Id, true, true);
						$('#IdCustomerDestination').append(optionBucle);//.trigger('change');
					});
			}
			$('#IdCustomerDestination').val("").trigger('change');
});

}

//Execute select2 functions 
GetListCustomerOrigin();
GetListCustomerDestination();

$("#SearchCustomerName").click(function(){
	GetListCustomerOrigin();

	$(".toast-success").html("Customer list updated");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
});

$("#SearchDestinationCustomer").click(function(){
	GetListCustomerDestination();

				$(".toast-success").html("Customer list updated");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
});


  $("#IdCustomerOrigin, #IdCustomerDestination").select2({
    dropdownParent: $("#ModalNewOrder")
  });

  $(".originInput, .DestinationInput").change(function() {
    $(this).css("border-color", "#A6A6A6");
});

 
});

</script>

