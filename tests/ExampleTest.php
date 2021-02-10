<?php

declare(strict_types=1);

namespace Deg540\koans\Test;

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function assertsFalse() {
        $this->assertFalse(true);
        $this->assertIsInt('2');
    }
}
