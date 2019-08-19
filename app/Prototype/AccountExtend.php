<?php


namespace App\Prototype;


class AccountExtend {
    private $name;

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
}