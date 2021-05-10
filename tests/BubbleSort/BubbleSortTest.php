<?php

namespace Tests\BubbleSort;

use Algorithm\BubbleSort\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    public function testSort()
    {
        self::assertEquals([1, 2, 3], BubbleSort::sort([1, 2, 3]));
        self::assertEquals([1, 2, 3], BubbleSort::sort([3, 2, 1]));
        self::assertEquals([1, 2, 3], BubbleSort::sort([2, 1, 3]));
    }
}
