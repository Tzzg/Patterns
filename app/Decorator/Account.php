<?php


namespace App\Decorator;


class Account {
    protected $name;

    protected $extend;

   function __construct (string $name) {
        $this->setName($name);
   }

    /**
     * @param mixed $name
     */
    public function setName ($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName () {
        return $this->name;
    }

    function show(){
        return self;
    }

    function add($name){
        $this->extend[] = $name;
    }

}