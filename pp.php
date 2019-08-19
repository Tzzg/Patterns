<?php

//use App\Decorator\Account;
//use App\Decorator\AccountQueue;
//use App\Decorator\AccountTime;
//use App\Proxy\Account as AccountAlias;
//use App\Proxy\StaffExtendService;
//use App\Proxy\IGetStaffExtend;
//use App\SimpleFactory\Add;
//use App\SimpleFactory\OperationFactory;
//use App\SimpleFactory\Sub;


require_once 'vendor/autoload.php';

/**
 * 工厂模式 + 适配器
 */
// add
//$add = new Add();
//$add->setNumA(1);
//$add->setNumB(2);
//dd($add->run());

// sub
//$sub = new Sub();
//$sub->setNumA(2);
//$sub->setNumB(3);
//dd($sub->run());

//$pp = OperationFactory::reInit('*');
//
//$pp->setNumA(1);
//$pp->setNumB(2);
//dd($pp->run());


/**
 * 装饰器
 */
//$account = new Account('流水单');
////dd($account);
//$accountQueue = new AccountQueue('队列');
//$accountTime = new AccountTime('流水时间');
//
//$accountQueue->decorate($account);
//$accountTime->decorate($account);
//
//dd($account);

/**
 * 代理模式
 */

//$account = new AccountAlias();
//
//$service = new StaffExtendService();
//$account->in($service->getStoreInfo());
//
//dd($account);
/**
 * 原型模式【克隆复制】
 */

//$account = new \App\Prototype\Account();
//
//$account->setId(1);
//$account->setName('流水');
//$account->setExtend('拓展1');
//
//
//
//$newAccount = $account->copy();
//$newAccount->setExtend('2');
////$newAccount->setExtend($accountExtendNew);
//dd($newAccount);
//
//
//$newAccount = $account->copy();
//$newAccount = $account->copy();
//dd($newAccount);

/**
 * 模版方法模式【避免重复的事在子类重复出现】
 */
//$one= new \App\TemplateMethod\CheckOne();
//
//$one->check(new \App\TemplateMethod\Photo());

/**
 * 门面模式
 */

//$a = new \App\Facade\CloudOldFacade();

//dd($a->getAccountInfo());

//dd($a->getStaffInfo());


/**
 * 建造者模式
 */

$a = new \App\Builder\AccountDoDirector(new \App\Builder\BpoAccountBuilder(1,2));
$a = new \App\Builder\AccountDoDirector(new \App\Builder\InnerAccoutBuilder(1,2));
$a->do();








