<?php
declare(strict_types=1);

namespace Tests\Unit\Money;

use Tests\TestCase;
use TddStudy\Money\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10, $product->amount);
        $product = $five->times(3);
        self::assertEquals(15, $product->amount);
    }
}
