<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation\Status;

interface StatusInterface
{
    public function getCode(): int;

    public function getType(): string;

    public function getTitle(): string;
}
