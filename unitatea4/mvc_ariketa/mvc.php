<?php
session_start();
include "model.php";
include "controller.php";
include "view.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$zerrenda = $model->getOnartutakoak();
	if(in_array($_GET['action'], $zerrenda)) {
		$controller->{$_GET['action']}();
	}
}

echo $view->output();
?>