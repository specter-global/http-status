<?php

declare(strict_types=1);

namespace SpecterGlobal\Tests\Unit\HttpStatus\Foundation;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SpecterGlobal\HttpStatus\Foundation\HttpStatusInterface;
use SpecterGlobal\HttpStatus\Foundation\SuccessfulHttpStatus;

class SuccessfulHttpStatusTest extends TestCase
{
    #[DataProvider('dataSuccessfulHttpStatus')]
    public function testInformationHttpStatus(HttpStatusInterface $httpStatus): void
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
    public static function dataSuccessfulHttpStatus(): iterable
    {
        foreach (SuccessfulHttpStatus::cases() as $httpStatus) {
            yield [$httpStatus];
        }
    }
}
