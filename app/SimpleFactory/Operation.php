<?php


namespace App\SimpleFactory;


class Operation {
    private $_numA;
    private $_numB;
    private $_result;
    /**
     * @return mixed
     */
    public function getNumA () {
        return $this->_numA;
    }

    /**
     * @return mixed
     */
    public function getNumB () {
        return $this->_numB;
    }

    /**
     * @param mixed $numA
     */
    public function setNumA ($numA) {
        $this->_numA = $numA;
    }

    /**
     * @param mixed $numB
     */
    public function setNumB ($numB) {
        $this->_numB = $numB;
    }

    /**
     * @return mixed
     */
    public function getResult () {
        return $this->_result;
    }

    /**
     * @param mixed $result
     */
    public function setResult ($result) {
        $this->_result = $result;
    }

    public function run(){

    }

}