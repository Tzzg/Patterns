<?php


namespace App\SimpleFactory;


class Mul extends Operation {
    public function run () {
        $this->setResult($this->getNumA() * $this->getNumB());
        return $this->getResult();
    }

}