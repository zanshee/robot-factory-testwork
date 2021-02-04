<?php

namespace FactoryRobot;

/**
 * Class Robot
 *
 * @package FactoryRobot
 */
class Robot
{
    /**
     * @var float
     */
    private float $weight;

    /**
     * @var float
     */
    private float $speed;

    /**
     * @var float
     */
    private float $height;

    /**
     * Robot constructor.
     *
     * @param float $weight
     * @param float $speed
     * @param float $height
     */
    public function __construct(float $weight, float $speed, float $height)
    {
        $this->weight = $weight;
        $this->speed  = $speed;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param Robot $robot
     */
    public function attach(Robot &$robot)
    {
        $this->weight += $robot->getWeight();
        $this->height += $robot->getHeight();
        $this->speed  = min($this->getSpeed(), $robot->getSpeed());
        $robot        = null;
        unset($robot);
    }

}
