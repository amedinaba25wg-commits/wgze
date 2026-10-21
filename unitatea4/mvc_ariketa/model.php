<?php
class Model
{
    public $string;
    private $klikKopurua;
    public function __construct(){
        $this->string = 'MVC + PHP = Awesome!';
        if(isset($_SESSION['klikSession'])) {
            $this->klikKopurua = $_SESSION['klikSession'];
        }
        else {
            $_SESSION['klikSession'] = 0;
        }
    }
    public function klikKopuruaHanditu() {
        $this->klikKopurua++;
        $_SESSION['klikSession'] = $this->klikKopurua;
    }
    public function getKlikKopurua() {
        return $this->klikKopurua;
    }
}
?>