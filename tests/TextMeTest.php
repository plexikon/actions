<?php
declare(strict_types=1);

namespace Plexikon\Actions\Tests;

use Generator;
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

    /**
     * @test
     * @dataProvider provideString
     * @param string $text
     */
    public function it_return_text_all_caps(string $text): void
    {
        $instance = new TextMe($text);

        $this->assertEquals('FOO_BAR', $instance->format());
    }

    public function provideString(): Generator
    {
        yield ['foo_bar'];
        yield ['Foo_Bar'];
        yield ['foo_BAR'];
    }
}
