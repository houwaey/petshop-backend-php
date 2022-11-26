<?php
require_once PROJECT_ROOT_PATH . "/controller/BaseController.php";

class PetController extends BaseController {
	
	public function getAllPets() {
		$data = $this->findAll();
		$this->sendOutput($data);
	}
}