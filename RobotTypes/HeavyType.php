<?php

namespace RobotTypes;

use FactoryRobot\RobotTypeInterface;

/**
 * Class HeavyType
 *
 * @package RobotTypes
 */
class HeavyType implements RobotTypeInterface
{
    /**
     * @return float
     */
    public function getWeight(): float
    {
        return 100.0;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return 0.5;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return 1.5;
    }
}
