<?php
class Model
{
    public $string;
    private $klikKopurua;
    public $string2;
    //Objektua sortzeko, objektuak edukiko du sessioan gorde den klik kopurua
    public function __construct(){
        $this->string = 'MVC + PHP = Awesome!';
        $this->string2 = 'Berrezarri';
        if(isset($_SESSION['klikSession'])) {
            $this->klikKopurua = $_SESSION['klikSession'];
        }
        else {
            $_SESSION['klikSession'] = 0;
        }
    }
    //Honek egiten duena da klika pultsatu den bakoitzen sesioan eta objektuan eguneratu klik kopurua
    public function klikKopuruaHanditu() {
        $this->klikKopurua++;
        $_SESSION['klikSession'] = $this->klikKopurua;
    }

    //Klik kopurua objektutik aterako du
    public function getKlikKopurua() {
        return $this->klikKopurua;
    }

    //Klik kopurua zerora bueltatuko du.
    public function klikKopuruaZero() {
        $this->klikKopurua = 0;
        $_SESSION['klikSession'] = 0;
    }
}
?>
