<?php
declare(strict_types=1);

namespace Plexikon\Actions\Tests;

use PHPUnit\Framework\TestCase;
use Plexikon\Actions\Commons\TextMe;

final class TextMeTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_text(): void
    {
        $instance = new TextMe('foo');

        $this->assertEquals('foo', $instance->text());
    }
}
