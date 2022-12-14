<?php

declare(strict_types=1);

namespace Pest\Describe;

use Pest\Plugin;
use PHPUnit\Framework\TestCase;

Plugin::uses(Describe::class);

/**
 * @return TestCase
 */
function describe(string $argument)
{
    return test()->describe(...func_get_args()); // @phpstan-ignore-line
}
