
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <?php
            $attributes = array("name" => "loginform");
            echo form_open("login/index", $attributes);
            ?>
            <h3>Ingreso al sistema</h3>
            <div class="form-group">
                <label for="email">Email</label>
                <?php echo form_input(array('id' => 'itEmail','name' => 'email', 'class' => 'form-control',  'placeholder' => lang('login.email'))); ?>
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <?php echo form_password(array('id' => 'itPassword', 'name' => 'password', 'class' => 'form-control', 'placeholder' => lang('login.password'))); ?>
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-info"><?php echo lang('login.boton'); ?></button>
                <button name="cancel" type="reset" class="btn btn-danger">Cancelar</button>
            </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>


 
