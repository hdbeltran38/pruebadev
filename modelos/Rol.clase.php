<?php
class Rol {
	public $id;
	public $nombre;
	public $cargo;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this ->cargo = '';
	}
}