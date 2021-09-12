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
                alert("Customer created !");
                $("#exampleModalDefault").modal('hide');
            } else {
                alert(data);
            }
        }
    });
}