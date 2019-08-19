<?php


namespace App\Proxy;

class StaffExtendService implements IGetStaffExtend {

    private $staff;
    function __construct () {
       return $this->staff = new StaffBridge();
    }

    public function getStaffBase () {
        return $this->staff->getStaffBase();
    }

    public function getStoreInfo () {
        return $this->staff->getStoreInfo();
    }
}