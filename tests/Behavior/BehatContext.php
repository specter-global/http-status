<?php

declare(strict_types=1);

namespace SpecterGlobal\Tests\Behavior;

use Behat\Behat\Context\Context;
use Behat\Step\Given;
use Behat\Step\Then;
use Behat\Step\When;
use SpecterGlobal\HttpStatus\Foundation\ClientErrorHttpStatus;
use SpecterGlobal\HttpStatus\Foundation\HttpStatusInterface;
use SpecterGlobal\HttpStatus\Foundation\InformationHttpStatus;
use SpecterGlobal\HttpStatus\Foundation\RedirectionHttpStatus;
use SpecterGlobal\HttpStatus\Foundation\ServerErrorHttpStatus;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;
use SpecterGlobal\HttpStatus\Foundation\SuccessfulHttpStatus;

class BehatContext implements Context
{
    /**
     * @psalm-suppress PropertyNotSetInConstructor
     */
    private StatusInterface $status;
    /**
     * @psalm-suppress PropertyNotSetInConstructor
     */
    private HttpStatusInterface $httpStatus;

    #[Given('client error http status with code :code')]
    public function givenClientErrorHttpStatusWithCode(int $code): void
    {
        $this->httpStatus = ClientErrorHttpStatus::from($code);
    }

    #[Given('information http status with code :code')]
    public function givenInformationHttpStatusWithCode(int $code): void
    {
        $this->httpStatus = InformationHttpStatus::from($code);
    }

    #[Given('redirection http status with code :code')]
    public function givenRedirectionHttpStatusWithCode(int $code): void
    {
        $this->httpStatus = RedirectionHttpStatus::from($code);
    }

    #[Given('server error http status with code :code')]
    public function givenServerErrorHttpStatusWithCode(int $code): void
    {
        $this->httpStatus = ServerErrorHttpStatus::from($code);
    }

    #[Given('successful http status with code :code')]
    public function givenSuccessfulHttpStatusWithCode(int $code): void
    {
        $this->httpStatus = SuccessfulHttpStatus::from($code);
    }

    #[When('I get an instance of StatusInterface object')]
    public function whenIGetAnInstanceOfStatusInterfaceObject(): void
    {
        $this->status = $this->httpStatus->getStatus();
    }

    #[Then('the status of object should be with code :code')]
    public function thenTheStatusOfObjectShouldBeWithCode(int $code): void
    {
        if ($this->status->getCode() !== $code) {
            new BehatContextException(
                sprintf(
                    'Failed asserting that two integers are identical. Expected: "%s". Actual: "%s"',
                    $code,
                    $this->status->getCode(),
                )
            );
        }
    }

    #[Then('the status of object should be with type :type')]
    public function thenTheStatusOfObjectShouldBeWithType(string $type): void
    {
        if ($this->status->getType() !== $type) {
            new BehatContextException(
                sprintf(
                    'Failed asserting that two strings are identical. Expected: "%s". Actual: "%s"',
                    $type,
                    $this->status->getType(),
                )
            );
        }
    }

    #[Then('the status of object should be with title :title')]
    public function thenTheStatusOfObjectShouldBeWithTitle(string $title): void
    {
        if ($this->status->getTitle() !== $title) {
            new BehatContextException(
                sprintf(
                    'Failed asserting that two strings are identical. Expected: "%s". Actual: "%s"',
                    $title,
                    $this->status->getTitle(),
                )
            );
        }
    }
}
