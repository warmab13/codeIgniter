<?= form_open('/codigofacilito/recibirdatos')?>
<?
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre'
	);

	$videos = array(
		'name' => 'videos',
		'placeholder' => 'Cantidad vídeos del curso'
	);
?>
<?= form_label('Nombre: ', 'nombre')?>
	<?= form_input($nombre)?>


<br><br>
<?= form_label('Numero vídeos: ', 'Numero de videos')?>
	<?= form_input($videos)?>

<?= form_submit('','Subir curso')?>
<?= form_close()?>

</body>
</html>