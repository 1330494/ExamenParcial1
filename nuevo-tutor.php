<?php include 'details.php'; ?>
<?php $carreras = Datos::getCarreras(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Tutor</title>
</head>
<body>
<?php require_once 'header.php'; ?>
<br>
<div style="width: 300px; margin-right: auto; margin-left: auto;">
	<h2>Nuevo Tutor</h2>
	<br>
	<form method="POST" action="">
		No. de Empleado:
		<input type="text" required name="no_emp">
		<br><br>
		Nombre:
		<input type="text" required name="nombre">
		<br><br>
		Carrera:
		<select required name="carrera">
			<?php if ($carreras!='false'): ?>
				<option value="" selected disabled>Selecciona Carrera</option>
				<?php foreach ($carreras as $carrera): ?>
					<option value="<?php echo $carrera['id']; ?>"><?php echo $carrera['nombre']; ?></option>
				<?php endforeach ?>
			<?php endif ?>
		</select>		
		<br><br>
		<center><input type="submit" value="Guardar" name="guardar"></center>
	</form>
<?php 
if (isset($_POST['guardar'])) {
	$arr = array('no_emp'=>$_POST['no_emp'], 'nombre'=>$_POST['nombre'],'carrera'=>$_POST['carrera']);
	Upload::nuevoTutor($arr);
?>
<script type="text/javascript">alert('Tutor guardado exitosamente.');</script>
<?php
}
 ?>
</div>
</body>
</html>