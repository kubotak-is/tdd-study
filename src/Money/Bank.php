<?php
declare(strict_types=1);

namespace TddStudy\Money;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($to);
    }
}
