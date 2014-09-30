<div class="container_12">
    <div class="grid_12">
	<p ALIGN=center> 
	Bienvenido a Tienda Virtual, aquí podrá ver una lista de todas las tiendas actuales <br>
	</p> 
	<br>
	<br>
<?php

foreach ($objetos as $objeto)

{
	
    
	
   echo '<img src="'.base_url().'/images/icotienda.jpg" alt="Tienda" height="42" width="42"></img> <a href="/tienda?id='.$objeto->idUsua . '">'. $objeto->nombre . '</a> (' . $objeto->descripcion . ')<br><br>' ;
   
} 


?>
		
		
    </div>   
</div>

   

  