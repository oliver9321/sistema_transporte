
            <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Customers</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="?c=Dashboard&a=Index">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="?c=Customers&a=Index">Customers list</a></li>
                                        <li class="breadcrumb-item active"><a href="#"><b>Form</b></a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<br>
<div class="row">
    
   <div class="col-sm-12">
     
   <form id="frm-Customers" action="?c=Customers&a=Save" method="post" enctype="multipart/form-data">

            <input type="hidden" name="Id" id="Id" value="<?php echo $Customer->Id; ?>" />
            <input type="hidden" name="IsActive" id="IsActive" value="<?php echo ($Driver->Id != null) ? $Customer->IsActive : 1 ?>" >

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-primary">Customer maintenance</h4>
                                <p class="text-muted mb-0">Form</p>
                            </div>
                   
                            <div class="card-body">

                            <div class="mb-3">
                                        <label class="form-label text-danger" for="IdCustomerType">*Customer type:</label>
                                        <input type="text" class="form-control" id="IdCustomerType" name="IdCustomerType" aria-describedby="IdCustomerType" placeholder="Enter Customer Type" value="<?php echo $Customer->IdCustomerType; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Name">*Customer name:</label>
                                        <input type="text" class="form-control" id="Name" name="Name" aria-describedby="Name" placeholder="Enter Customer name" value="<?php echo $Customer->Name; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="LastName">*Customer last name:</label>
                                        <input type="text" class="form-control" id="LastName" name="LastName"  aria-describedby="LastName" placeholder="Enter Customer last name" value="<?php echo $Customer->LastName; ?>">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Phone1">*Number phone 1:</label>
                                        <input type="tel" class="form-control" id="Phone1" name="Phone1" aria-describedby="Phone1" placeholder="1-(555)-555-5555" value="<?php echo $Customer->Phone1; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="Phone2">Number phone 2:</label>
                                        <input type="tel" class="form-control" id="Phone2" name="Phone2" aria-describedby="Phone2" placeholder="1-(555)-555-5555" value="<?php echo $Customer->Phone2; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Email">*Email:</label>
                                        <input type="tel" class="form-control" id="Email" name="Email" aria-describedby="Email" placeholder="Email" value="<?php echo $Customer->Email; ?>">
                                    </div>

                                    <?php if($Customer->Id != null){?>
                                        <button type="submit" class="btn btn-warning">Update <i class="fa fa-refresh"></i> </button>
                                        <input type="checkbox"  data-toggle="toggle" id="ActivoToogle" data-on="IsActive" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-onstyle="danger" data-style="ios">
                                    <?php }else {?>
                                        <button type="submit"  class="btn btn-success">Submit <i class="fa fa-save"></i> </button>
                                    <?php }?>
                           
                            </div>
                           
                        </div>
                    </div>
                </div>
    </form>
</div>
</div>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $("#frm-Customers").submit(function(){
            return $(this).validate();
        });

        if($("#IsActive").val() > 0){
            $('#ActivoToogle').bootstrapToggle('on');
        }else{
            $('#ActivoToogle').bootstrapToggle('off');
        }

        $('#ActivoToogle').change(function() {

            if($(this).prop('checked') == false){

                swal({
                    title: 'Registro Eliminado',
                    text: 'Presione Actualizar para eliminar el registro',
                    type: 'error',
                    timer: 5000,
                    buttonsStyling: true
                });
            }
            $("#IsActive").val(($(this).prop('checked')) == false ? 0 : 1);
        });

    });

</script>


