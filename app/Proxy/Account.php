<?php


namespace App\Proxy;


class Account {

    private $staffInfo;

    function in(array $array){
        $this->staffInfo = $array;
    }
}