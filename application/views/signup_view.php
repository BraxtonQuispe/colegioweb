
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <?php
            $attributes = array("name" => "signupform");
            echo form_open("signup/index", $attributes);
            ?>
            <h3>Registro de Usuário</h3>

            <div class="form-group">
                <label for="firstName">Nombre</label>
                <input class="form-control" name="firstName" placeholder="<?php echo lang('usuario.nombre');?>" type="text" value="<?php echo set_value('firstName'); ?>" />
                <span class="text-danger"><?php echo form_error('firstName'); ?></span>
            </div>			

            <div class="form-group">
                <label for="lastName">Apellido</label>
                <input class="form-control" name="lastName" placeholder="<?php echo lang('usuario.apellido');?>" type="text" value="<?php echo set_value('lastName'); ?>" />
                <span class="text-danger"><?php echo form_error('lastName'); ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" name="email" placeholder="Digite su Email" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input class="form-control" name="password" placeholder="<?php echo lang('usuario.password');?>" type="password" />
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirme su password</label>
                <input class="form-control" name="confirmPassword" placeholder="<?php echo lang('usuario.confirma.password');?>" type="password" />
                <span class="text-danger"><?php echo form_error('confirmPassword'); ?></span>
            </div>

            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-info">Registrar</button>
                <button name="cancel" type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
