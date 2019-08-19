<?php


namespace App\Proxy;


class StaffBridge implements IGetStaffExtend {

    public function getStoreInfo () {
//        print_r('getStoreInfo');
        return [1];
    }

    public function getStaffBase () {
//        print_r('getStaffBase');
        return [2];
    }

}