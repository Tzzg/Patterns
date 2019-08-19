<?php


namespace App\Builder;


class InnerAccoutBuilder extends AccountDoBuilder {

    public function __construct ($accountId, $csId) {
        parent::__construct($accountId, $csId, 0);
    }

    public function buildDown () {
        print_r('下载。。。');
    }

    public function buildXiu () {
        print_r('修片。。。');
    }

    public function buildUpload () {
        print_r('上传。。。');
    }
}