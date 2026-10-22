<?php
class Controller
{
	private $model;

	//Kontroladorearen objektua sortuko du
	public function __construct($model) {
    	  $this->model = $model;
	}


	public function clicked() {
    	   $this->model->string = 'Updated Data,thanks to MVC and PHP!';
		   $this->model->klikKopuruaHanditu();
	}
	public function reset() {
		$this->model->klikKopuruaZero();
	}
}

?>
