<link rel="stylesheet" href="assets/select2/select2.min.css">

<ul class="breadcrumb no-bg mb-1">
    <li class="breadcrumb-item"><i class="fa fa-home"></i> <a href="#">Puestos</a></li>
    <li  class="breadcrumb-item"><i class="fa fa-list-ul"></i> <a href="?c=mant_puestos&a=index">Listado de Puestos</a></li>
    <li class="breadcrumb-item active"><?php echo  ($Puesto->Id != null)  ? "Modificar Registro" : "Nuevo Registro" ?></li>
</ul>

<div class="box box-block bg-white">

    <h4 class="text-primary">Mantenimiento de Puestos</h4>
    <p class="font-90 text-muted mb-1 text-bold">Administracion de Sistema</p>

    <hr>

     <form id="frm-puestos" action="?c=mant_puestos&a=Save" method="post" enctype="multipart/form-data" class="form-control">

        <div class="container-fluid">
        <input type="hidden" name="Id" id="Id" value="<?php echo $Puesto->Id; ?>" />
        <input type="hidden" name="IsActive" id="IsActive" value="<?php echo ($Puesto->Id != null) ? $Puesto->IsActive : 1 ?>" >

        <div class="form-group">
            <label for="cmbDepartamento"><b>Departamentos:</b></label>
            <select id="DepartamentoID" name="DepartamentoID" class="form-control select2" style="width: 100%">
                <option value="" selected>Seleccione el departamento al que pertenece el puesto</option>
                <?php foreach($Departamento as $a): ?>
                    <option value="<?php echo $a->Id; ?>"><?php echo $a->Nombre; ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="form-group">
            <label for="Codigo"><b>Código:</b></label>
            <input type="text" name="Codigo" value="<?php echo $Puesto->Codigo; ?>" class="form-control" placeholder="Asigne un codigo al puesto" data-validacion-tipo="requerido|min:3" />
        </div>


        <div class="form-group">
            <label for="Nombre"><b>Nombre (Puesto):</b></label>
            <input type="text" name="Nombre" value="<?php echo $Puesto->Nombre; ?>" class="form-control" placeholder="Ingrese el nombre del puesto" data-validacion-tipo="requerido|min:5" />
        </div>


        <div class="form-group">
            <label for="Descripcion"><b>Descripción:</b></label>
            <textarea name="Descripcion" class="form-control"><?php echo htmlspecialchars($Puesto->Descripcion); ?></textarea>
        </div>


        <div class="form-group col-md-12">
            <hr>
            <?php if($Puesto->Id != null){?>
                <button type="submit" class="btn btn-warning">Actualizar <i class="fa fa-refresh"></i> </button>
                <input type="checkbox"  data-toggle="toggle" id="ActivoToogle" data-on="IsActive" data-off="Inactivo" data-onstyle="success" data-offstyle="danger" data-onstyle="danger" data-style="ios">
            <?php }else {?>
                <button type="submit"  class="btn btn-success">Guardar <i class="fa fa-save"></i> </button>
            <?php }?>
         </div>
    </div>

    </form>


</div>

<script type="text/javascript" src="assets/js/select2.full.min.js"></script>


<script type="text/javascript">
    $('.select2').select2();
</script>

<script type="text/javascript">

    $(document).ready(function(){

        if($("#Id").val() != null) {
            var DepartamentoID = "<?php echo ($Puesto->DepartamentoID != null) ? $Puesto->DepartamentoID : "" ?>";
            $("#DepartamentoID").val(DepartamentoID).trigger('change');
        }


        $("#frm-puestos").submit(function(){
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


