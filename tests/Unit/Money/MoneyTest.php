<?php
declare(strict_types=1);

namespace Tests\Unit\Money;

use Tests\TestCase;
use TddStudy\Money\Dollar;
use TddStudy\Money\Franc;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        self::assertEquals(new Dollar(10), $five->times(2));
        self::assertEquals(new Dollar(15), $five->times(3));
    }

    public function testEquality(): void
    {
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }

    public function testFrancMultiplication(): void
    {
        $five = new Franc(5);
        self::assertEquals(new Franc(10), $five->times(2));
        self::assertEquals(new Franc(15), $five->times(3));
    }
}
