<?php include_once 'header_dashboard.php'; 
if (empty($_GET['id'])) {
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
						<li class='active'><a href="<?php echo $nombre.'?seccion=info'; ?>"><span>Información</span></a></li>
						<li><a href="<?php echo $nombre.'?seccion=soft'; ?>"><span>Software</span></a></li>
						<li><a href="<?php echo $nombre.'?seccion=web'; ?>"><span>Mini-Web</span></a></li>
						<li class='last'><a href=" <?php echo $nombre.'?seccion=contacto'; ?> "><span>Contacto</span></a></li>
					</ul>
				</div>
					
			</div>
			</div>


