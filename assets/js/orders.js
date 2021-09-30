//Customer functions
function newCustomer() {

    $.ajax({
        url: "index.php?c=customers&a=NewCustomer",
        type: "POST",
        data: {
            IdCustomerType: $("#IdCustomerTypeNewCustomer").val(),
            Name: $("#NameNewCustomer").val(),
            LastName: $("#LastNameNewCustomer").val(),
            Phone1: $("#Phone1NewCustomer").val(),
            Phone2: $("#Phone2NewCustomer").val(),
            Email: $("#EmailNewCustomer").val()
        },
        success: function(data) {

            if (data == "true") {

                $("#ModalNewCustomer").modal('hide');
                $(".toast-success").html("Customer created");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();

            } else {

                $(".toast-error").html(data);
                var myAlert = document.getElementById('toastError');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        }
    });
}

$(document).ready(function() {

    $('#IdCustomerOrigin').on("change", function(e) {

        var CustomerID = this.value;

        if (CustomerID != '') {

            $("#OriginPhone1, #OriginEmail,#OriginPhone2 ").css("border-color", "#e3ebf6");
            $("#OriginPhone2, #OriginPhone1, #OriginEmail").val("");

            $.ajax({
                url: "index.php?c=customers&a=GetInfoCustomerById",
                type: "POST",
                data: {
                    Id: CustomerID
                },
                success: function(data) {

                    $("#OriginPhone1, #OriginEmail,#OriginPhone2 ").css("border-color", "orange");

                    var value = JSON.parse(data);

                    if (value.Email != '') {
                        $("#OriginEmail").val(value.Email);
                        $("#OriginEmail").css("border-color", "green");
                    }
                    if (value.Phone1 != '') {
                        $("#OriginPhone1").val(value.Phone1);
                        $("#OriginPhone1").css("border-color", "green");
                    }

                    if (value.Phone2 != '') {
                        $("#OriginPhone2").val(value.Phone2);
                        $("#OriginPhone2").css("border-color", "green");
                    }

                }
            });

        }
    });

    $('#IdCustomerDestination').on("change", function(e) {

        var CustomerID = this.value;

        if (CustomerID != '') {

            $("#DestinationPhone1, #DestinationEmail,#DestinationPhone2").css("border-color", "#e3ebf6");
            $("#DestinationPhone2, #DestinationPhone1, #DestinationEmail").val("");

            $.ajax({
                url: "index.php?c=customers&a=GetInfoCustomerById",
                type: "POST",
                data: {
                    Id: CustomerID
                },
                success: function(data) {

                    $("#DestinationPhone2, #DestinationPhone1, #DestinationEmail").css("border-color", "orange");

                    var value = JSON.parse(data);

                    if (value.Email != '') {
                        $("#DestinationEmail").val(value.Email);
                        $("#DestinationEmail").css("border-color", "green");
                    }

                    if (value.Phone1 != '') {
                        $("#DestinationPhone1").val(value.Phone1);
                        $("#DestinationPhone1").css("border-color", "green");
                    }

                    if (value.Phone2 != '') {
                        $("#DestinationPhone2").val(value.Phone2);
                        $("#DestinationPhone2").css("border-color", "green");
                    }

                }
            });
        }

    });



});

//End Customers


//companyServices
function newCompany() {

    $.ajax({
        url: "index.php?c=companyServices&a=NewCompany",
        type: "POST",
        data: {
            CompanyName: $("#CompanyNameNewCompany").val(),
            CompanyAddress: $("#CompanyAddressNewCompany").val(),
            CompanyPhone1: $("#CompanyPhone1NewCompany").val(),
            CompanyPhone2: $("#CompanyPhone2NewCompany").val(),
            CompanyEmail: $("#CompanyEmailNewCompany").val()
        },
        success: function(data) {

            if (data == "true") {

                $("#ModalNewCompanyService").modal('hide');
                $(".toast-success").html("Company created");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();

            } else {

                $(".toast-error").html(data);
                var myAlert = document.getElementById('toastError');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        }
    });
}

//End companyServices

//Drivers functions

function newDriver() {

    $.ajax({
        url: "index.php?c=Drivers&a=NewDriver",
        type: "POST",
        data: {
            DriverName: $("#DriverNameNewDriver").val(),
            DriverPhone1: $("#DriverPhone1NewDriver").val(),
            DriverPhone2: $("#DriverPhone2NewDriver").val()
        },
        success: function(data) {

            if (data == "true") {

                $("#ModalNewDriver").modal('hide');

                $(".toast-success").html("Driver created");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();

            } else {

                $(".toast-error").html(data);
                var myAlert = document.getElementById('toastError');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        }
    });
}

//End drivers

//Vehicles functions
function newVehicle() {

    $.ajax({
        url: "index.php?c=Vehicles&a=newVehicle",
        type: "POST",
        data: {
            Brand: $("#BrandNewVehicle").val(),
            Model: $("#ModelNewVehicle").val()
        },
        success: function(data) {

            if (data == "true") {

                $("#ModalNewVehicle").modal('hide');
                $(".toast-success").html("Vehicle created");
                var myAlert = document.getElementById('toastSuccess');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();

            } else {

                $(".toast-error").html(data);
                var myAlert = document.getElementById('toastError');
                var bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        }
    });
}

//End vehicles

//Google Maps Origin Info

$(document).ready(function() {

    //Google Maps API Origin Address
    let autocomplete;
    let address1Field;
    let postalField;

    //Google Maps API Destination Address
    let autocomplete2;
    let address1Field2;
    let postalField2;

    function initAutocomplete() {

        address1Field = document.querySelector("#OriginAddress");
        postalField = document.querySelector("#OriginZip");

        address1Field2 = document.querySelector("#DestinationAddress");
        postalField2 = document.querySelector("#DestinationZip");

        autocomplete = new google.maps.places.Autocomplete(address1Field, {
            componentRestrictions: { country: ["us", "ca"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });

        autocomplete2 = new google.maps.places.Autocomplete(address1Field2, {
            componentRestrictions: { country: ["us", "ca"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });

        autocomplete.addListener("place_changed", fillInAddress);
        autocomplete2.addListener("place_changed", fillInAddress2);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";

        $("#OriginState, #OriginCity, #OriginZip").css("border-color", "#e3ebf6;");

        for (const component of place.address_components) {

            const componentType = component.types[0];

            switch (componentType) {
                case "street_number":
                    {
                        address1 = `${component.long_name} ${address1}`;
                        break;
                    }

                case "route":
                    {
                        address1 += component.short_name;
                        break;
                    }

                case "postal_code":
                    {
                        postcode = `${component.long_name}${postcode}`;
                        break;
                    }

                case "postal_code_suffix":
                    {
                        postcode = `${postcode}-${component.long_name}`;
                        break;
                    }
                case "locality":

                    if (component.long_name != '') {
                        document.querySelector("#OriginCity").value = component.long_name;
                        $("#OriginCity").css("border-color", "green");
                    } else {
                        $("#OriginCity").css("border-color", "orange");
                        document.querySelector("#OriginCity").value = "";
                    }

                    break;
                case "administrative_area_level_1":
                    {

                        if (component.short_name != '') {
                            document.querySelector("#OriginState").value = component.short_name;
                            $("#OriginState").css("border-color", "green");
                        } else {
                            $("#OriginState").css("border-color", "orange");
                            document.querySelector("#OriginState").value = "";
                        }

                        break;

                    }

            }

            if (postcode != '') {
                postalField.value = postcode;
                $("#OriginZip").css("border-color", "green");
            } else {
                $("#OriginZip").css("border-color", "orange");
                postalField.value = "";
            }

        }
    }

    /**************************************************** */

    //Destination Info Google Maps

    function fillInAddress2() {
        // Get the place details from the autocomplete object.
        const place2 = autocomplete2.getPlace();
        let address12 = "";
        let postcode2 = "";
        $("#DestinationState, #DestinationCity, #DestinationZip").css("border-color", "#e3ebf6;");

        for (const component2 of place2.address_components) {

            const componentType2 = component2.types[0];

            switch (componentType2) {
                case "street_number":
                    {
                        address12 = `${component2.long_name} ${address12}`;
                        break;
                    }

                case "route":
                    {
                        address12 += component2.short_name;
                        break;
                    }

                case "postal_code":
                    {
                        postcode2 = `${component2.long_name}${postcode2}`;
                        break;
                    }

                case "postal_code_suffix":
                    {
                        postcode2 = `${postcode}-${component2.long_name}`;
                        break;
                    }
                case "locality":

                    if (component2.long_name != '') {
                        document.querySelector("#DestinationCity").value = component2.long_name;
                        $("#DestinationCity").css("border-color", "green");
                    } else {
                        $("#DestinationCity").css("border-color", "orange");
                        document.querySelector("#DestinationCity").value = "";
                    }

                    break;
                case "administrative_area_level_1":
                    {

                        if (component2.short_name != '') {
                            document.querySelector("#DestinationState").value = component2.short_name;
                            $("#DestinationState").css("border-color", "green");
                        } else {
                            $("#DestinationState").css("border-color", "orange");
                            document.querySelector("#DestinationState").value = "";
                        }

                        break;

                    }
                    /*	case "country":
                    		document.querySelector("#country").value = component.long_name;
                    		break;
                    	}*/
            }

            if (postcode2 != '') {
                postalField2.value = postcode2;
                $("#DestinationZip").css("border-color", "green");
            } else {
                $("#DestinationZip").css("border-color", "orange");
                postalField2.value = "";
            }

        }
    }


    function init() {
        var input = document.getElementById('BillingAddress');
        var autocomplete3 = new google.maps.places.Autocomplete(input);
    }


    init();
    initAutocomplete();


});