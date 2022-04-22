<?php

use Phppractice\StrategyPattern\{CameraAppPlus, SocialMedia};
use Phppractice\AdapterPattern_Ex1\{Duck, MallardDuck, TurkeyAdapter, WildTurkey};

use  Phppractice\AdapterPattern_Challenge\{DroneAdapter, SuperDrone};
use Phppractice\ObserverPattern_Ex\SimpleObserver;
use Phppractice\ObserverPattern_Ex\SimpleSubject;

require_once  'vendor/autoload.php';

// Strategy Pattern
// $myPhoto = new CameraAppPlus();
// $myPhoto->take();
// $myPhoto->setSharableBehavior(new SocialMedia());
// echo "<br>";
// $myPhoto->share();



// // Adapter Pattern
// function testDuck(Duck $duck)
// {
//     $duck->fly();
//     echo "<br>";
//     $duck->quack();
// }

// //Example 1
// $mallard1 = new MallardDuck();
// testDuck($mallard1);

// echo "<br>";

// $turkey = new WildTurkey();
// $turkeyAdapter = new TurkeyAdapter($turkey);
// testDuck($turkeyAdapter);


// echo "<br>";

// Challenge
// $drone = new SuperDrone();
// $droneAdapter = new DroneAdapter($drone);
// testDuck($droneAdapter);



$subject = new SimpleSubject();

$observer1 = new SimpleObserver($subject);
$observer2 = new SimpleObserver($subject);

$subject->removeObserver($observer1);

$subject->setValue(12);
