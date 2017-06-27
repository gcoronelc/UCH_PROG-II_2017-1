<?php
session_start();


$infousuario = $_SESSION['info_usuario'];

if (isset($infousuario)) {

    foreach ($infousuario as $array) {
        ?>

        <form id="formulario_respuesta_busqueda_usuario">
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label" for="txtFregistro">Fecha de registro</label>
                    <input type="text" class="form-control" id="txtFregistro" name="txtFregistro" value="<?= $array['fregistro_usuario'] ?>" disabled="disabled">
                </div>

                <div class="form-group">
                    <label for="txtTipoUsuario">Tipo de Usuario</label>
                    <select class="form-control" name="txtTipoUsuario" id="txtTipoUsuario" >
                        <?php
                        foreach ($_SESSION['tipo_usuario'] as $value) {

                            if ($value['id_tipousuario'] == $array['col_TipoUsuario_id_tipousuario']) {
                                ?>
                                <option value="<?php $value['id_tipousuario'] ?>" selected="selected"><?= $value['descripcion_tu'] ?></option>
                                <?php
                            } else {
                                ?>
                                <option value="<?php $value['id_tipousuario'] ?>"><?= $value['descripcion_tu'] ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?= $array['nombre_usuario'] ?>" >
                </div>
                <div class="form-group">
                    <label for="txtAPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="txtAPaterno" name="txtAPaterno" value="<?= $array['ap_usuario'] ?>">
                </div>
                <div class="form-group">
                    <label for="txtAMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="txtAMaterno" name="txtAMaterno" value="<?= $array['am_usuario'] ?>" >
                </div>
                <div class="form-group">

                    <label >Sexo</label><br>

                    <?php
                    if ($array['sexo_usuario'] == "M") {
                        ?>
                        <label><input type="radio" name="sexo" value="M" class="minimal" checked="checked">&nbsp;&nbsp; Maculino &nbsp;&nbsp;</label>
                        <label><input type="radio" name="sexo" value="F" class="minimal" >&nbsp;&nbsp; Femenino</label>
                        <?php
                    } else {
                        ?>
                        <label><input type="radio" name="sexo" value="M" class="minimal" >&nbsp;&nbsp; Maculino &nbsp;&nbsp;</label>
                        <label><input type="radio" name="sexo" value="F" class="minimal" checked="checked">&nbsp;&nbsp; Femenino</label>
                        <?php
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="<?= $array['email_usuario'] ?>">
                </div>
                <div class="form-group">
                    <label for="txtUsuario">Usuario</label>
                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" value="<?= $array['usu_usuario'] ?>" disabled="disabled">
                </div>
                <div class="form-group">
                    <label for="txtPassword">Password</label>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" value="<?= $array['password_usuario'] ?>" >
                </div>
                <div class="form-group">
                    <label for="txtPassword2">Vuelva a escribir el password</label>
                    <input type="password" class="form-control" id="txtPassword2" name="txtPassword2" value="<?= $array['password_usuario'] ?>" >
                </div>
                <div class="form-group">
                    <label for="txtEstado">Estado</label>
                    <select class="form-control" name="txtEstado" id="txtEstado" >
                        <?php
                        if ($array['estado_usuario'] == 1) {
                            ?>
                            <option value="<?= $array['estado_usuario'] ?>" selected="selected">Activo</option>
                            <option value="2" >Desactivado</option>
                            <?php
                        } else {
                            echo $array['estado_usuario'];
                            ?>
                            <option value="1">Activo</option>
                            <option value="<?= $array['estado_usuario'] ?>" selected="selected">Desactivado</option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="box-footer" style="text-align: right;">
                <button type="submit" class="btn btn-success pull-righ" >Guardar cambios</button>
            </div>
        </form>

        <?php
    }
} else {
    ?>

    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> 
        <h4>Ups!, </h4> 
        <p>Lo sentimos no hemos encontrado registros sobre este usuario.</p> 
    <!--        <p> 
            <button type="button" class="btn btn-danger">Take this action</button> 
            <button type="button" class="btn btn-default">Or do this</button>
        </p> -->
    </div>

<?php } ?>
<script>
  $(function () {
    $("#formulario_respuesta_busqueda_usuario").submit(function(e){
        e.preventDefault();
        
        alert("este formulario actualizara datos");
        
    });
  });
</script>

