<?php


namespace App\Builder;


class BpoAccountBuilder extends AccountDoBuilder {

    public function __construct ($accountId, $csId) {
        parent::__construct($accountId, $csId, 1);
    }

    public function buildDown () {
        print_r('bpo下载。。。');
    }

    public function buildXiu () {
        print_r('bpo修片。。。');
    }

    public function buildUpload () {
        print_r('bpo上传。。。');
    }
}