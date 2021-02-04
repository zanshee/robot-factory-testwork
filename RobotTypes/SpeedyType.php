<?php

namespace RobotTypes;

use FactoryRobot\RobotTypeInterface;

/**
 * Class SpeedyType
 *
 * @package RobotTypes
 */
class SpeedyType implements RobotTypeInterface
{
    /**
     * @return float
     */
    public function getWeight(): float
    {
        return 1.5;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return 76.5;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return 0.2;
    }
}
