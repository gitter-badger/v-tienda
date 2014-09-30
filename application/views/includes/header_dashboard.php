<?php include_once 'header.php'; ?>

<div class="container_12" id="dashboard">
    <div id="menu_dashboard"> 
		<img src="<?php echo base_url() ?>/images/ico_separador.png"  height="32" width="32"><a  href="<?php echo site_url('dashboard')?>" ><img src="<?php echo base_url() ?>/images/ico_mundo.png" alt="Tiendas" height="32" width="32">  Tiendas virtuales  </a>
		<img src="<?php echo base_url() ?>/images/ico_separador.png"  height="32" width="32"><a  href="<?php echo site_url('mi_tienda')?>"><img src="<?php echo base_url() ?>/images/ico_local.png" alt="Mi Tienda" height="32" width="32"> Mi propia tienda  </a>
		<img src="<?php echo base_url() ?>/images/ico_separador.png"  height="32" width="32"><a  href="<?php echo site_url('faq')?>"><img src="<?php echo base_url() ?>/images/ico_pregunta.png" alt="Faq" height="32" width="32"> ¿Qué es una tienda virtual?  </a>
		<img src="<?php echo base_url() ?>/images/ico_separador.png"  height="32" width="32">
	</div>

            <div class="campos_dashboard" id="bienvenida">

                <h4> Bienvenido... <a href=""><?php echo $this->session->userdata('nombre_usuario'); ?> </a></h4>
            </div>

            <div class="campos_dashboard" id="menu_dashboard">
                

            </div>
			
			
	