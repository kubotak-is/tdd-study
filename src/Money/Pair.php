<?php
declare(strict_types=1);

namespace TddStudy\Money;

class Pair
{
    public function __construct(private string $from, private string $to)
    {
    }

    public function equals(Pair $object): bool
    {
        return $this->from === $object->from && $this->to === $object->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}
