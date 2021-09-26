
            <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Users</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="?c=Dashboard&a=Index">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="?c=users&a=Index">Users list</a></li>
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
     
   <form id="frm-users" action="?c=users&a=Save" method="post" enctype="multipart/form-data">

            <input type="hidden" name="Id" id="Id" value="<?php echo $User->Id; ?>" />
            <input type="hidden" name="IsActive" id="IsActive" value="<?php echo ($User->Id != null) ? $User->IsActive : 1 ?>" >

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-primary">User maintenance</h4>
                                <p class="text-muted mb-0">Form</p>
                            </div>
                   
                            <div class="card-body">


                                    <div class="mb-3">
                                    <label for="ProfileUserId"><b>*Profile:</b></label>
                                    <select id="ProfileUserId" name="ProfileUserId" class="form-control select2">
                                        <option value="" selected>Select user profile</option>
                                        <?php foreach($Sucursal as $a): ?>
                                            <option value="<?php echo $a->Id; ?>"><?php echo $a->Nombre; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Name">*Name:</label>
                                        <input type="text" class="form-control" id="Name" name="Name" aria-describedby="Name" placeholder="Enter Name" value="<?php echo $User->Name; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="LastName">*Last Name:</label>
                                        <input type="text" class="form-control" id="LastName" name="LastName" aria-describedby="LastName" placeholder="Enter Last Name" value="<?php echo $User->LastName; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="UserName">*User Name:</label>
                                        <input type="text" class="form-control" id="UserName" name="UserName" aria-describedby="UserName" placeholder="Enter User Name" value="<?php echo $User->UserName; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Password">*Profile Password:</label>
                                        <input type="text" class="form-control" id="Password" name="Password" aria-describedby="Password" placeholder="Enter Password" value="<?php echo $User->Password; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Email">*Email:</label>
                                        <input type="text" class="form-control" id="Email" name="Email" aria-describedby="Email" placeholder="Enter Email" value="<?php echo $User->Email; ?>"> 
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-danger" for="Image">Imagen:</label>
                                        <input type="text" class="form-control" id="Image" name="Image" aria-describedby="Image" placeholder="" value="<?php echo $User->Image; ?>"> 
                                    </div>
                            
                                    <?php if($User->Id != null){?>
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

        $("#frm-users").submit(function(){
            return $(this).validate();
        });

        if($("#IsActive").val() > 0){
            $('#IsActiveToogle').bootstrapToggle('on');
        }else{
            $('#IsActiveToogle').bootstrapToggle('off');
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


