<?php
class Calculadora {
    protected int $total;
        
    public function __construct($tot=0) {
        $this->total = $tot;
    }

    public function setTotal($result) {
        $this->total = $result;
    }

    public function getTotal() {
        return $this->total;
    }
        

    public function add($num) {
        $this->setTotal($this->getTotal() + $num);
    }

    public function sub($num) {
        $this->setTotal($this->getTotal() - $num);
    }

    public function multiply($num) {
        $this->setTotal($this->getTotal() * $num);
    }

    public function divide($num) {
        $this->setTotal($this->getTotal() / $num);
    }

    public function clear() {
        $this->setTotal(0);
    }

    public function total() {
        return $this->getTotal();
    }
}

