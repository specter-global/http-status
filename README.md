# HttpStatus

The HttpStatus project is a small library that helps manage HTTP status codes

## Installation

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this library:

```console
composer require specter-global/http-status
```

## Usage

#### Information status

```php
<?php

declare(strict_types=1);

use SpecterGlobal\HttpStatus\Foundation\InformationHttpStatus;

$continueStatus = InformationHttpStatus::Continue->getStatus();

echo $continueStatus->getCode();  // 100
echo $continueStatus->getType();  // 'continue'
echo $continueStatus->getTitle(); // 'Continue'
```

#### Successful status

```php
<?php

declare(strict_types=1);

use SpecterGlobal\HttpStatus\Foundation\SuccessfulHttpStatus;

$okStatus = SuccessfulHttpStatus::Ok->getStatus();

echo $okStatus->getCode();  // 200
echo $okStatus->getType();  // 'ok'
echo $okStatus->getTitle(); // 'OK'
```

#### Redirection status

```php
<?php

declare(strict_types=1);

use SpecterGlobal\HttpStatus\Foundation\RedirectionHttpStatus;

$multipleChoicesStatus = RedirectionHttpStatus::MultipleChoices->getStatus();

echo $multipleChoicesStatus->getCode();  // 300
echo $multipleChoicesStatus->getType();  // 'multiple_choices'
echo $multipleChoicesStatus->getTitle(); // 'Multiple Choices'
```

#### Client error status

```php
<?php

declare(strict_types=1);

use SpecterGlobal\HttpStatus\Foundation\ClientErrorHttpStatus;

$badRequestStatus = ClientErrorHttpStatus::BadRequest->getStatus();

echo $badRequestStatus->getCode();  // 400
echo $badRequestStatus->getType();  // 'bad_request'
echo $badRequestStatus->getTitle(); // 'Bad Request'
```

#### Server error status

```php
<?php

declare(strict_types=1);

use SpecterGlobal\HttpStatus\Foundation\ServerErrorHttpStatus;

$internalServerErrorStatus = ServerErrorHttpStatus::InternalServerError->getStatus();

echo $internalServerErrorStatus->getCode();  // 500
echo $internalServerErrorStatus->getType();  // 'internal_server_error'
echo $internalServerErrorStatus->getTitle(); // 'Internal Server Error'
```

## Tests

Running the tests is simple:

```console
composer dev:test
```

## Support

For complete instructions on using the HttpStatus, see the
[Specter.Global HttpStatus documentation](https://developer.specter.global/docs/http-status).

## Security Vulnerabilities

Please review [our security policy](https://github.com/specter-global/http-status/security/policy) on how to
report security vulnerabilities.

## License

This software is published under the [MIT License](LICENSE)
