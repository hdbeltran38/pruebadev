<?php
require_once '../modelos/Rol.clase.php';
require_once '../dao/Roles.dao.php';

switch ($_GET['a']) {
	case 'ingr':
		$r = new Rol();
		$r->nombre = $_POST['nombre'];
		$r->cargo = $_POST['cargo'];

		RolesDAO::ingresarDato($r);
		break;
	case 'edit':
		$r = new Rol();
		$r->id = $_POST['id'];
		$r->nombre = $_POST['nombre'];
		$r->cargo = $_POST['cargo'];

		RolesDAO::editarDato($r);
		break;
	case 'elim':
		RolesDAO::eliminarPorId($_GET['id']);
		break;
}

header('Location: ../roles/');