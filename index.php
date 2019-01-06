<?php require_once ('vendor/autoload.php');

use Med\Mediator;
use Med\Lock;
use Med\LockAllDoorsCommand;

$mediator = new Mediator();

$mainLock = new Lock('Main');
$backdoorLock = new Lock('Back');

$mediator->registerLock ($mainLock);
$mediator->registerLock ($backdoorLock);

$lockAllDoors = new LockAllDoorsCommand($mediator);
$lockAllDoors->execute();


