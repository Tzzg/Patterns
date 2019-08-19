<?php


namespace App\Builder;


abstract class AccountDoBuilder {

    private $accountId;
    private $csId;
    private $isBpo;

    public function __construct ($accountId,$csId,$isBpo) {
        $this->accountId = $accountId;
        $this->csId = $csId;
        $this->isBpo = $isBpo;
    }

    public abstract function buildDown();
    public abstract function buildXiu();
    public abstract function buildUpload();
}