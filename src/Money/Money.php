<?php
declare(strict_types=1);

namespace TddStudy\Money;

abstract class Money
{
    protected int $amount;
    protected string $currency;

    abstract public function times(int $multiplier);

    public function __construct(
        int $amount,
        string $currency
    )
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }
}
