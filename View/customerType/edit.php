
            <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Customer Types</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="?c=Dashboard&a=Index">Dashboard</a></li>
                                        <li class="breadcrumb-item "><a href="?c=customerType&a=Index">Customer type list</a></li>
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
     
   <form id="frm-customerType" action="?c=customerType&a=Save" method="post" enctype="multipart/form-data">

            <input type="hidden" name="Id" id="Id" value="<?php echo $customerType->Id; ?>" />
            <input type="hidden" name="IsActive" id="IsActive" value="<?php echo ($customerType->Id != null) ? $customerType->IsActive : 1 ?>" >

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-primary">Customer type maintenance</h4>
                                <p class="text-muted mb-0">Form</p>
                            </div>
                   
                            <div class="card-body">

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="NameType">*Type of customer:</label>
                                        <input type="text" class="form-control" id="NameType" name="NameType" aria-describedby="NameType" placeholder="Enter the type of customer" value="<?php echo $customerType->NameType; ?>"> 
                                    </div>


                                    <?php if($customerType->Id != null){?>
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

        $("#frm-customerType").submit(function(){
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


