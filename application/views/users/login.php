<div class="container_12" id="login_cont">
<div class="prefix_1 grid_12">
	 <br><img src="<?php echo base_url() ?>/images/presentacion_tienda.png" alt="Presentacion" > <br>
	</div>

    <div class="prefix_4 grid_7" id="login" >
		
        <div class="prefix_5" id="formulario_login">
            <?php
            $atributos = array('id' => 'login_form', 'class' => 'form_login');
            echo form_open('users/verify_login', $atributos);

            $username = array(
                'name' => 'username',
                'id' => 'username',
                'value' => set_value('username')
            );
            $password = array(
                'name' => 'password',
                'id' => 'password',
                'value' => '',
            );
            $submit = array(
                'name' => 'submit',
                'id' => 'submit',
                'value' => 'Entrar',
            );
            ?>
            <div  class="campos_login">
                <?php
                echo form_label('Usuario');
                echo form_input($username);
                
                ?>
				<span class="errors">
                    <?= form_error('username'); ?>
                </span>
            </div>
            <div  class="campos_login">
                <?php
                echo form_label('Contraseña');
                echo form_password($password);
                echo form_error('password');
                ?>
            </div>
            <?php
            echo form_submit($submit);
            ?>
            <?php echo form_close(); ?>
            <?php echo anchor('users/registrar','Regístrate') ?>
        </div>
        
    </div>
</div>