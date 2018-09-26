<?php 
require_once 'conexion.php';

class Upload
{
	public static function nuevoAlumno($DATA)
	{
		$pdo = get();
		$stmt = $pdo->prepare("INSERT INTO alumnos (matricula, carrera, nombre, tutor) VALUES (:matricula, :carrera, :nombre, :tutor)");
		$stmt->bindParam(':matricula', $DATA['matricula']);
		$stmt->bindParam(':carrera', $DATA['carrera']);
		$stmt->bindParam(':nombre', $DATA['nombre']);
		$stmt->bindParam(':tutor', $DATA['tutor']);
		$stmt->execute();
	}

	public static function nuevaCarrera($DATA)
	{
		$pdo = get();
		$stmt = $pdo->prepare("INSERT INTO carreras (nombre) VALUES (:nombre)");
		$stmt->bindParam(':nombre', $DATA['nombre']);
		$stmt->execute();
	}

	public static function nuevoTutor($DATA)
	{
		$pdo = get();
		$stmt = $pdo->prepare("INSERT INTO tutores (no_emp, nombre, carrera) VALUES (:no_emp, :nombre, :carrera)");
		$stmt->bindParam(':no_emp', $DATA['no_emp']);
		$stmt->bindParam(':nombre', $DATA['nombre']);
		$stmt->bindParam(':carrera', $DATA['carrera']);
		$stmt->execute();

	}

	public static function getCarreras()
	{
		$pdo = get();
		$stmt = $pdo->prepare("SELECT * FROM carreras");
		$stmt->execute();
		$result = $stmt->fetchAll();
		if ($result) {
			return $result;
		}else{
			return 'false';
		}
	}
	
}

class Datos
{
	public static function getCarreras()
	{
		$pdo = get();
		$stmt = $pdo->prepare("SELECT * FROM carreras");
		$stmt->execute();
		$result = $stmt->fetchAll();
		if ($result) {
			return $result;
		}else{
			return 'false';
		}
	}

	public static function getTutores()
	{
		$pdo = get();
		$stmt = $pdo->prepare("SELECT * FROM tutores");
		$stmt->execute();
		$result = $stmt->fetchAll();
		if ($result) {
			return $result;
		}else{
			return 'false';
		}
	}
}

?>