<?php
declare(strict_types=1);

namespace Tests\Unit\Money;

use TddStudy\Money\Franc;
use Tests\TestCase;
use TddStudy\Money\Money;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = Money::dollar(5);
        self::assertTrue(Money::dollar(10)->equals($five->times(2)));
        self::assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    public function testEquality(): void
    {
        self::assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        self::assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        self::assertTrue(Money::franc(5)->equals(Money::franc(5)));
        self::assertFalse(Money::franc(5)->equals(Money::franc(6)));
        self::assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function testFrancMultiplication(): void
    {
        $five = Money::franc(5);
        self::assertTrue(Money::franc(10)->equals($five->times(2)));
        self::assertTrue(Money::franc(15)->equals($five->times(3)));
    }

    public function testCurrency(): void
    {
        self::assertEquals("USD", Money::dollar(1)->currency());
        self::assertEquals("CHF", Money::franc(1)->currency());
    }

    public function testDifferentClassEquality()
    {
        self::assertTrue((new Money(10, "CHF"))->equals(new Franc(10, "CHF")));
    }
}
