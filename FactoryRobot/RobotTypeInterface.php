<?php

namespace FactoryRobot;

/**
 * Interface RobotTypeInterface
 *
 * @package FactoryRobot
 */
interface RobotTypeInterface
{
    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     * @return float
     */
    public function getSpeed(): float;

    /**
     * @return float
     */
    public function getHeight(): float;
}