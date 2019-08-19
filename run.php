<?php
require_once 'vendor/autoload.php';

use \Illuminate\Database\Capsule\Manager as Causle;
\App\Service\DataService::init();

$all =Causle::connection()->getDoctrineSchemaManager()->listTables();

collect($all)->each(function ($table) {
//    dd($table->getName());
    $temp = [];
//    \Doctrine\DBAL\Schema\Table::
//    dd($table->getColumns());
    collect($table->getColumns())->each(function ($column) use ($table) {
//        dd($column);
        $tem = [$table->getName(),$column->getName(),$column->getType(),$column->getLength(),$column->getComment()];
        print_r(implode("\t",$tem)."\n");
    });
//    exit;
});