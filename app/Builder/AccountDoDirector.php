<?php


namespace App\Builder;


class AccountDoDirector {


    private $accountDoBuilder;

    public function __construct (AccountDoBuilder $accountDoBuilder) {
        $this->accountDoBuilder = $accountDoBuilder;
    }

    public function do(){
        $this->accountDoBuilder->buildDown();
        $this->accountDoBuilder->buildXiu();
        $this->accountDoBuilder->buildUpload();
    }

}