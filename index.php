<?php
require_once __DIR__ . "/inc/bootstrap.php";
require_once PROJECT_ROOT_PATH . "/controller/PetController.php";

$petController = new PetController();
$petController->getAllPets();