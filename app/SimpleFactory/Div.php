<?php


namespace App\SimpleFactory;


class Div extends Operation {
    public function run () {
        $this->setResult($this->getNumA() / $this->getNumB());
        return $this->getResult();
    }

}