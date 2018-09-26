<?php include 'details.php'; ?>
<?php $carreras = Datos::getCarreras(); ?>
<?php $tutores = Datos::getTutores(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Alumno</title>
</head>
<body>
<?php require_once 'header.php'; ?>
<br>
<div style="width: 300px; margin-right: auto; margin-left: auto;">
	<h2>Nuevo Alumno</h2>
	<br>
	<form method="POST" action="">
		Matricula:
		<input type="text" required name="matricula">
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
		Tutores:
		<select required name="tutor">
			<?php if ($tutores!='false'): ?>
				<option value="" selected disabled>Selecciona Carrera</option>
				<?php foreach ($tutores as $tutor): ?>
					<option value="<?php echo $tutor['no_emp']; ?>"><?php echo $tutor['nombre']; ?></option>
				<?php endforeach ?>
			<?php endif ?>
		</select>
		<br><br>
		<center><input type="submit" value="Guardar" name="guardar"></center>
	</form>
<?php 
if (isset($_POST['guardar'])) {
	$arr = array('matricula'=>$_POST['matricula'],'carrera'=>$_POST['carrera'], 'nombre'=>$_POST['nombre'], 'tutor'=>$_POST['tutor']);
	Upload::nuevoAlumno($arr);
?>
<script type="text/javascript">alert('Alumno guardada exitosamente.');</script>
<?php
}
 ?>
</div>
</body>
</html>