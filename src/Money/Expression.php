<?php
declare(strict_types=1);

namespace TddStudy\Money;

interface Expression
{
    public function plus(Expression $addend): Expression;
    public function reduce(Bank $back, string $to): Money;
}
