<?php
declare(strict_types=1);

namespace TddStudy\Money;

class Franc
{
    private int $amount;
    public function __construct(
        int $amount
    )
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}
