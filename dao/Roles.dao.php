<?php
require_once '../modelos/Conexion.clase.php';
require_once '../modelos/Rol.clase.php';

class RolesDAO {
	public static function listarDatos () {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta('SELECT * FROM empleado');
		$con->cerrarConexion();
		return $cont;
	}

	public static function ingresarDato ($rol) {
		$con = new Conexion();
		$con->ejecutarActualizacion("INSERT INTO empleado (Nombre, Cargo, fechaCumpleaños )  VALUES ('$rol->nombre', '$rol->cargo', '$rol->fecha de cumpleaños')");
		$con->cerrarConexion();
	}

	public static function buscarPorId ($id) {
		$con = new Conexion();
		$cont = $con->ejecutarConsulta("SELECT * FROM empleado WHERE Id = $id");
		$con->cerrarConexion();
		return $cont[0];
	}

	public static function editarDato ($rol) {
		$con = new Conexion();
		$con->ejecutarActualizacion("UPDATE empleado SET Nombre = '$rol->nombre' , Cargo = '$rol->cargo' WHERE Id = $rol->id");
		$con->cerrarConexion();
	}

	public static function eliminarPorId ($id) {
		$con = new Conexion();
		$con->ejecutarActualizacion("DELETE FROM empleado WHERE Id = $id");
		$con->cerrarConexion();
	}
}