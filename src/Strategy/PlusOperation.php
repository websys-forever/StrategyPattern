<?php

namespace WebsysForever\Strategy;


class PlusOperation implements OperationInterface
{

    public function calc(int $a, int $b): int
    {
        return $a + $b;
    }
}