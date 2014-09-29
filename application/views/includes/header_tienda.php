<?php include_once 'header_dashboard.php'; 
if (empty($_GET)) {
    $user_id = $this->session->userdata('user_id');
	}else{
	$user_id = $_GET['id'];
	}
?>



<div class='container_12'>
			<div class='grid_10'>
				<?php
					foreach ($objetos as $objeto)
					{		
						echo '<div class="entry-title"><a> - '.$objeto->nombre.'</a></div> ';
						echo ' - ( '.$objeto->descripcion.' ) '; 
					}
					echo '<br><br>';
					
					$nombre = strip_special_characters($objeto->nombre);
					
					function strip_special_characters($string){    
						$from = 'ÀÁÂÃÄÅÆÞÇÐÈÉÊËÌÍÎÏÑÒÓÔÕÖØŔßÙÚÛÜÝªàáâãäåæþçðèéêëìíîïñºòóôõöøŕùúûüýýÿ^´`¨~ ';
						$to = 'AAAAAAABCDEEEEIIIINOOOOOORSUUUUYaaaaaaaabcdeeeeiiiinoooooooruuuuyyy-----_';
						$string = strtr(utf8_decode($string), utf8_decode($from), $to);
    
						return utf8_encode($string);
					}
				?>
				
				<div id='menu-tienda'>
					<ul>
						<li class='active'><a href=<?php echo base_url().$nombre.'/info?id='.$user_id ?>><span>Información</span></a></li>
						<li><a href=<?php echo base_url().$nombre.'/soft?id='.$user_id?>><span>Software</span></a></li>
						<li><a href=<?php echo base_url().$nombre.'/web?id='.$user_id?>><span>Mini-Web</span></a></li>
						<li class='last'><a href=<?php echo base_url().$nombre.'/contacto?id='.$user_id?>><span>Contacto</span></a></li>
					</ul>
				</div>
					
			</div>
			</div>


