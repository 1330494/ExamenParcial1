<?php include 'details.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nueva Carrera</title>
</head>
<body>
<?php include 'header.php'; ?>
<br>
<div style="width: 300px; margin-right: auto; margin-left: auto;">
	<h2>Nueva Carrera</h2>
	<br>
	<form method="POST" action="">
		Nombre:
		<input type="text" required name="nombre">
		<br><br>
		<center><input type="submit" value="Guardar" name="guardar"></center>
	</form>
</div>
<?php 
if (isset($_POST['guardar'])) {
	$arr = array('nombre'=>$_POST['nombre']);
	Upload::nuevaCarrera($arr);
?>
<script type="text/javascript">alert('Carrera guardada exitosamente.');</script>
<?php
}
 ?>
</body>
</html>