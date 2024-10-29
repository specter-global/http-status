<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

interface HttpStatusInterface
{
    public function getStatus(): StatusInterface;
}
