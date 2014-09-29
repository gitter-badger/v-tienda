<?php
$attributes = array('id' => 'registrar_usuario');
echo form_open('users/create_account', $attributes);

$username = array(
    'name' => 'username',
    'id' => 'username',
    'value' => set_value('username')
);
$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => set_value('email')
);
$password = array(
    'name' => 'password',
    'id' => 'password',
    'value' => ''
);

$re_password = array(
    'name' => 're_password',
    'id' => 're_password',
    'value' => ''
);
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Guardar'
);
?>
<div class="container_12">
    <div class="prefix_4 grid_7" >
        <div class="prefix_5" id="formulario_registro">
            <div  class="campos_formularios">
                <?php
                echo form_label('Usuario');
                echo form_input($username);
                ?>
                <span class="errors">
                    <?= form_error('username'); ?>
                </span>
            </div>
            <div  class="campos_formularios">
                <?php
                echo form_label('Email');
                echo form_input($email);
                ?>
                <span class="errors">
                    <?= form_error('email'); ?>
                </span>
            </div>
            <div  class="campos_formularios">
                <?php
                echo form_label('Contraseña');
                echo form_password($password);
                ?>

                <span class="errors">
                    <?= form_error('password'); ?>
                </span>
            </div>
            <div  class="campos_formularios">
                <?php
                echo form_label('Repetir contraseña');
                echo form_password($re_password);
                ?>

                <span class="errors">
                    <?= form_error('re_password'); ?>
                </span>
            </div>
            <div id="boton_submit" >
                <?php echo form_submit($submit) ?>
            </div>
        </div>
    </div>
</div>