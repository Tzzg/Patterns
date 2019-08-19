<?php
require_once 'vendor/autoload.php';

use \Illuminate\Database\Capsule\Manager as Causle;
use GuzzleHttp\Client;

\App\Service\DataService::init();
$imageFile = 'image/';
$client = new Client(['base_uri' => 'https://cloud.cdn.hzmantu.com/upload/']);

$i = 1;
$ones = Causle::table('cloud_photo')->where('CP_IsShow',1)->where('CP_Person','>','0')->where('CP_IsTemplate',0)
    ->orderBy('CP_Id','desc')
    ->limit(3000)
    ->pluck('CP_OriginPath')->each(function ($one) use ($client,$imageFile,&$i){
        $response = $client->get($one)->getBody();
        file_put_contents($imageFile.$one,$response);
        print_r($i++."\r");
//        dd($response);
    });







