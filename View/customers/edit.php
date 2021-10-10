
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
            <input type="hidden" name="IsActive" id="IsActive" value="<?= ($Customer->Id != null) ? $Customer->IsActive : 1 ?>"/>

                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="card">
                            <div class="card-header  bg-dark">
                                <h1 class="card-title text-white">Customer maintenance</h1>
                                <p class="text-muted mb-0">Form</p>
                            </div>
                   
                            <div class="card-body">

                                     <div class="mb-3">
                                        <label class="form-label text-danger" for="IdCustomerType">*Customer type:</label>
                                        <select style="width: 100%;" id="IdCustomerType" name="IdCustomerType" class="select2 form-control custom-select">
										<option value="" selected>Select customer type</option>
										<?php foreach($CustomerTypeList  as $key => $value): ?>
											<option value="<?= $value['Id']; ?>">
												<?= $value['NameType']; ?>
											</option>
											<?php endforeach; ?>
									    </select>
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
                                        <input type="checkbox"  data-toggle="toggle" id="IsActiveToogle" data-on="IsActive" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-onstyle="danger" data-style="ios">
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

        var IdCustomerType = "<?= $Customer->IdCustomerType;?>";
        $("#IdCustomerType").val(IdCustomerType);

        if($("#IsActive").val() > 0){
         //   $('#IsActiveToogle').bootstrapToggle('on');
        }else{
            //$('#IsActiveToogle').bootstrapToggle('off');
        }

        $('#IsActiveToogle').change(function() {

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


