<?php


namespace App\Facade;


class CloudOldFacade {

    private $accountService;
    private $staffService;


    public function __construct () {
          $this->setAccountService(new AccountService());
          $this->setStaffService(new StaffService());
    }

    /**
     * @return mixed
     */
    private function getAccountService () {
        return $this->accountService;
    }

    /**
     * @param mixed $accountService
     */
    private function setAccountService ($accountService): void {
        $this->accountService = $accountService;
    }

    /**
     * @return mixed
     */
    private function getStaffService () {
        return $this->staffService;
    }

    /**
     * @param mixed $staffService
     */
    private function setStaffService ($staffService): void {
        $this->staffService = $staffService;
    }

    public function getStaffInfo(){
       return $this->getStaffService()->curlTo();
    }
    public function getAccountInfo(){
        return $this->getAccountService()->curlTo();
    }


}