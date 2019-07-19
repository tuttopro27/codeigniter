<?php form_open("/codigofacilito/recibirdatos") ?>
<?php
	$nombre= array(
		'name'=> 'nombre',
		'placeholder'=> 'escribe tu nombre'
	);
	$videos= array(
		'name'=> 'videos',
		'placeholder'=> 'cantidad de videos del curso'
	);
?>
<label>
	Nombre: 
	<?php echo form_input($nombre) ?>
</label>
<br>
<label>
	Numero de video: 
	<?php echo form_input($videos) ?>
</label>
<?php echo form_submit('', 'subir curso') ?>
<?php form_close() ?>
</body>
</html>