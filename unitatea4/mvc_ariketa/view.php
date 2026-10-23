<?php
class View
{
	private $model;
	private $controller;

	public function __construct($controller,$model) {
    	  $this->controller = $controller;
    	  $this->model = $model;
	}

	public function output(){
    	  return '<p><button><a style="text-decoration: none; " href="mvc.php?action=clicked">' . 
		$this->model->string . "</a></button></p>" . 
		"<p>Klik kopurua: " . $this->model->getKlikKopurua() . "</p>" . 
		'<p><a href="mvc.php?action=reset"/>' . $this->model->string2 . '</a></p>' . 
		'<p><a href="mvc.php?action=beste_bat">edozer</a></p>';

	}
}
?>
