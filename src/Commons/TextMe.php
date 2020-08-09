<?php
declare(strict_types=1);

namespace Plexikon\Actions\Commons;

final class TextMe
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function text(): string
    {
        return $this->text;
    }

    public function format(): string
    {
        return strtoupper($this->text);
    }
}
