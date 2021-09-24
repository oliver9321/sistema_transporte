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

                $("#exampleModalDefault").modal('hide');
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