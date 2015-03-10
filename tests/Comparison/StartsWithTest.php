<?php

/*
 * This file is part of the webmozart/criteria package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Expression\Tests\Comparison;

use PHPUnit_Framework_TestCase;
use Webmozart\Expression\Comparison\StartsWith;

/**
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StartsWithTest extends PHPUnit_Framework_TestCase
{
    public function testMatch()
    {
        $expr = new StartsWith('Thomas');

        $this->assertTrue($expr->evaluate('Thomas Edison'));
        $this->assertFalse($expr->evaluate('Mr. Thomas Edison'));
    }
}
