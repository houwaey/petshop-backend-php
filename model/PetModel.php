<?php
require_once PROJECT_ROOT_PATH . "/model/Database.php";

class PetModel extends Database {
	
	public function findAll() {
		return $this->select("SELECT * FROM pet_details ORDER BY id");
	}
}