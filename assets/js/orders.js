function newCustomer() {

    $.ajax({
        url: "index.php?c=customers&a=NewCustomer",
        type: "POST",
        data: {
            IdCustomerType: $("#IdCustomerType").val(),
            Name: $("#Name").val(),
            LastName: $("#LastName").val(),
            Phone1: $("#Phone1").val(),
            Phone2: $("#Phone2").val(),
            Email: $("#Email").val()
        },
        success: function(data) {
            console.log(data);
            if (data == "true") {

                $("#exampleModalDefault").modal('hide');
                $(".toast-success").html("Customer created !");
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