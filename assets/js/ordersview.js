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

    $('#IdCompanyService').on("change", function(e) {

        var IdCompanyService = $("#IdCompanyService").val();

        if (IdCompanyService != '') {

            $("#CompanyAddress, #CompanyPhone1, #CompanyPhone2, #CompanyEmail").css("border-color", "#e3ebf6");
            $("#CompanyAddress, #CompanyPhone1, #CompanyPhone2, #CompanyEmail").val("");

            $.ajax({
                url: "index.php?c=companyServices&a=GetInfoCompanyServicesById",
                type: "POST",
                data: {
                    Id: IdCompanyService
                },
                success: function(data) {

                    var value = JSON.parse(data);

                    $("#CompanyAddress, #CompanyPhone1, #CompanyPhone2, #CompanyEmail").css("border-color", "orange");
                    $("#CompanyAddress, #CompanyPhone1, #CompanyPhone2, #CompanyEmail").val("");

                    if (value.CompanyAddress != '') {
                        $("#CompanyAddress").val(value.CompanyAddress);
                        $("#CompanyAddress").css("border-color", "green");
                    }

                    if (value.CompanyPhone1 != '') {
                        $("#CompanyPhone1").val(value.CompanyPhone1);
                        $("#CompanyPhone1").css("border-color", "green");
                    }

                    if (value.CompanyPhone2 != '') {
                        $("#CompanyPhone2").val(value.CompanyPhone2);
                        $("#CompanyPhone2").css("border-color", "green");
                    }

                    if (value.CompanyEmail != '') {
                        $("#CompanyEmail").val(value.CompanyEmail);
                        $("#CompanyEmail").css("border-color", "green");
                    }

                }
            });

        }
    });

    $('#IdDriver').on("change", function(e) {

        var IdDriver = this.value;

        if (IdDriver != '') {

            $("#DriverPhone1, #DriverPhone2").css("border-color", "#e3ebf6");
            $("#DriverPhone1, #DriverPhone2").val("");

            $.ajax({
                url: "index.php?c=drivers&a=GetInfoDriverById",
                type: "POST",
                data: {
                    Id: IdDriver
                },
                success: function(data) {

                    $("#DriverPhone1, #DriverPhone2").css("border-color", "orange");
                    $("#DriverPhone1, #DriverPhone2").val("");

                    var value = JSON.parse(data);

                    if (value.DriverPhone1 != '') {
                        $("#DriverPhone1").val(value.DriverPhone1);
                        $("#DriverPhone1").css("border-color", "green");
                    }

                    if (value.DriverPhone2 != '') {
                        $("#DriverPhone2").val(value.DriverPhone2);
                        $("#DriverPhone2").css("border-color", "green");
                    }
                }
            });

        }
    });


});

//End Customers