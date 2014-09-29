<?php
$attributes = array('id' => 'crear_tienda');
echo form_open('mi_tienda/crear_tienda', $attributes);
$nombre = array(
    'name' => 'nombre',
    'id' => 'nombre',
    'value' => ''
);
$descripcion = array(
    'name' => 'descripcion',
    'id' => 'descripcion',
    'value' => ''
);
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Crear Tienda'
);
?>
<div class="container_12">
    <div class="grid_12">
		 <div  class="campos_formularios">
				<?php
                echo form_label('<h3>Mi Tienda</h3><br><br>');
				?>
                <?php
                echo form_label('Nombre');
				echo '(nombre de su negocio,empresa o comercio, ej: El Pincel pintureria)<br>';
                echo form_input($nombre);
                ?>
                <span class="errors">
                    <?= form_error('nombre'); ?>
                </span>
            </div>
            <div  class="campos_formularios">
                <?php
                echo form_label('Descripcion');
				echo '(breve descripción, ej: Venta de pinturas)<br>';
                echo form_input($descripcion);
                ?>
                <span class="errors">
                    <?= form_error('descripcion'); ?>
                </span>
            </div>
			<div id="boton_submit" >
                <?php echo form_submit($submit) ?>
            </div><br><br>
	
        Este usuario no dispone de una tienda, para crearla contactese con nosotros: <br>
        skype: tiendavirtualweb <br>
        mail: tiendavirtualweb@hotmail.com <br>
        facebook: <a href='http://www.facebook.com/tiendavirtualweb' target='_blank'>/tiendavirtualweb</a> <br>
        twitter: <a href='http://www.twitter.com/virtualtienda' target='_blank'>@VirtualTienda</a>
    </div>

</div>
