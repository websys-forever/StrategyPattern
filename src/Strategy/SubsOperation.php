<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.08.18
 * Time: 11:54
 */

namespace WebsysForever\Strategy;


class SubsOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        return $a - $b;
    }
}