<?php


namespace App\Decorator;


class Extend extends Account {

    public function decorate(Account $account){
        $account->add($this->name);
    }
}