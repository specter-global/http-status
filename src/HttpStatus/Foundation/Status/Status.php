<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation\Status;

final class Status implements StatusInterface
{
    public function __construct(
        private readonly int $code,
        private readonly string $type,
        private readonly string $title,
    ) {
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
