<?php

use FactoryRobot\FactoryRobot;
use RobotTypes\HeavyType;
use RobotTypes\SpeedyType;

require 'autoload.php';

$out = new Output();

$factory = new FactoryRobot();

$speedyRobots = $factory->create(new SpeedyType(), 5);
$out->out("Stack of speedy robots created.");
$out->dump($speedyRobots);

$heavyRobots = $factory->create(new HeavyType(), 2);
$out->out("Stack of heavy robots created.");
$out->dump($heavyRobots);

$speedyTwo = $speedyRobots[2];
$heavyZero = $heavyRobots[0];

$out->out("Let's see what these two robots are capable of:");
$out->dump(array(
    $speedyTwo,
    $heavyZero,
));

$speedyTwo->attach($heavyZero);

$out->out("Let's see what we got after conflux:");
$out->dump(array(
    $speedyTwo,
    $heavyZero,
));

