<?php


namespace App\TemplateMethod;

/**
 * Class SpotCheck
 * @package App\TemplateMethod
 *
 * 照片评审
 */
class SpotCheck {

    public function doScore(){

    }

    public function check(Photo $photo){
        collect($photo->getItem())->each(function ($item){
            print_r($item);
            $this->doScore($item);
        });
    }

}