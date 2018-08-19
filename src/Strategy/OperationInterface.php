<?php

namespace WebsysForever\Strategy;


interface OperationInterface
{
    public function calc(int $a, int $b): int;
}