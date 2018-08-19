<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.08.18
 * Time: 11:57
 */

namespace WebsysForever\Strategy;


class DivsOperation implements OperationInterface
{

    /**
     * @param int $a First number
     * @param int $b Second number
     * @return int division $a / $b
     * @throws \Exception if there is division by zero
     */
    public function calc(int $a, int $b): int
    {
        if (!$b) {
            throw new \Exception('Devision by zero');
        }
        return floor($a / $b);
    }
}