
            <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Company Services</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="?c=Dashboard&a=Index">Dashboard</a></li>
                                        <li class="breadcrumb-item "><a href="?c=companyServices&a=Index">CompanyService list</a></li>
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
     
   <form id="frm-companyServices" action="?c=companyServices&a=Save" method="post" enctype="multipart/form-data">

            <input type="hidden" name="Id" id="Id" value="<?php echo $CompanyService->Id; ?>" />
            <input type="hidden" name="IsActive" id="IsActive" value="<?php echo ($CompanyService->Id != null) ? $CompanyService->IsActive : 1 ?>" >

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-primary">Company service maintenance</h4>
                                <p class="text-muted mb-0">Form</p>
                            </div>
                   
                            <div class="card-body">

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="CompanyName">*Company name:</label>
                                        <input type="text" class="form-control" id="CompanyName" name="CompanyName" aria-describedby="CompanyName" placeholder="Enter the company name" value="<?php echo $CompanyService->CompanyName; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="Address">Address:</label>
                                        <input type="text" class="form-control" id="Address" name="Address"  aria-describedby="Address" placeholder="Enter the address" value="<?php echo $CompanyService->Address; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Phone1">*Phone #1:</label>
                                        <input type="tel" class="form-control" id="Phone1" name="Phone1"  aria-describedby="Phone1" placeholder="1 (555) 555-555" value="<?php echo $CompanyService->Phone1; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="Phone2">Phone #2:</label>
                                        <input type="tel" class="form-control" id="Phone2" name="Phone2"  aria-describedby="Phone2" placeholder="1 (555) 555-555 (optional)" value="<?php echo $CompanyService->Phone2; ?>">
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label class="form-label" for="Email">Email:</label>
                                        <input type="email" class="form-control" id="Email" name="Email"  aria-describedby="Email" placeholder="Enter the email (optional)" value="<?php echo $CompanyService->Email; ?>">
                                    </div>

                                    <?php if($CompanyService->Id != null){?>
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

        $("#frm-companyServices").submit(function(){
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


