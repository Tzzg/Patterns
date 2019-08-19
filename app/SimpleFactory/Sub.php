<?php


namespace App\SimpleFactory;


class Sub extends Operation {

    public function run () {
        $this->setResult($this->getNumA() - $this->getNumB());
        return $this->getResult();
    }

}