<?php


namespace App\TemplateMethod;


class Photo {

    private $item = ['化妆','摄影','修图'];

    /**
     * @return array
     */
    public function getItem (): array {
        return $this->item;
    }

}