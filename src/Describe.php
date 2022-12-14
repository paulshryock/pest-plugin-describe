<?php

declare(strict_types=1);

namespace Pest\Describe;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
trait Describe
{
    /**
     * Describe description.
     */
    public function describe(string $name): TestCase
    {
        $this->assertNotEmpty($name);

        return $this;
    }
}
