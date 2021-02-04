<?php

namespace FactoryRobot;

/**
 * Class FactoryRobot
 *
 * @package FactoryRobot
 */
class FactoryRobot
{
    /**
     * @param RobotTypeInterface $type
     * @param int                $amount
     *
     * @return Robot[]
     */
    public function create(RobotTypeInterface $type, int $amount): array
    {
        $result = array();

        while ($amount > 0) {
            $result[] = new Robot($type->getWeight(), $type->getSpeed(), $type->getHeight());
            $amount --;
        }

        return $result;
    }

}
