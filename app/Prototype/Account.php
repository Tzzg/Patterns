<?php


namespace App\Prototype;



class Account {

    private $id;
    private $name;

    private $extend;

    /**
     * @return mixed
     */
    public function getName () {
        return $this->name;
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
    public function getId () {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getExtend (): AccountExtend {
        return $this->extend;
    }

    /**
     * @param string $extendName
     */
    public function setExtend (string $extendName): void {

        $extend = new AccountExtend();
        $extend->setName($extendName);
        $this->extend = $extend;
    }

    function copy(){
        return clone $this;
    }



}