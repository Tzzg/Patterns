<?php


namespace App\SimpleFactory;


class Add extends Operation {
    public function run () {
        $this->setResult($this->getNumA() + $this->getNumB());
        return $this->getResult();
    }

}