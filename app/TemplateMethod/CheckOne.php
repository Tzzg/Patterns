<?php


namespace App\TemplateMethod;


class CheckOne extends SpotCheck {

    public function doScore () {
        print_r(rand(1,100));
    }

}