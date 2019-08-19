<?php


namespace App\SimpleFactory;


class OperationFactory {

    static $factory = [
        '+'=>Add::class,
        '-'=>Sub::class,
        '*'=>Mul::class,
        '%'=>Div::class
    ];

    static function init(string $operation){
        switch ($operation){
            case '+':
                return new Add();
            case '-':
                return new Sub();
            case '*':
                return new Mul();
            case '%':
                return new Div();
        }
    }

    static function reInit(string $opretion){
        return new self::$factory[$opretion]() ?? null;
    }
}