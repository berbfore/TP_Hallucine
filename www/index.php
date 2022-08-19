<?php
require_once "controllers/HallucineController.controller.php";

$hallucineController = new HallucineController();
var_dump($hallucineController);

$hallucineController->showMovies();

?>