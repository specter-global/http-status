<?php

declare(strict_types=1);

namespace SpecterGlobal\Tests\Unit\HttpStatus\Foundation;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SpecterGlobal\HttpStatus\Foundation\HttpStatusInterface;
use SpecterGlobal\HttpStatus\Foundation\ServerErrorHttpStatus;

class ServerErrorHttpStatusTest extends TestCase
{
    #[DataProvider('dataServerErrorHttpStatus')]
    public function testServerErrorHttpStatus(HttpStatusInterface $httpStatus): void
    {
        $this->assertNotEmpty($httpStatus->getStatus()->getCode());
        $this->assertIsInt($httpStatus->getStatus()->getCode());

        $this->assertNotEmpty($httpStatus->getStatus()->getType());
        $this->assertIsString($httpStatus->getStatus()->getType());

        $this->assertNotEmpty($httpStatus->getStatus()->getTitle());
        $this->assertIsString($httpStatus->getStatus()->getTitle());
    }

    /**
     * @return iterable<int, array{HttpStatusInterface}>
     */
    public static function dataServerErrorHttpStatus(): iterable
    {
        foreach (ServerErrorHttpStatus::cases() as $httpStatus) {
            yield [$httpStatus];
        }
    }
}
