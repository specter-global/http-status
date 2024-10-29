<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\Status;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

enum RedirectionHttpStatus: int implements HttpStatusInterface
{
    private const MULTIPLE_CHOICES_CODE = 300;
    private const MULTIPLE_CHOICES_TYPE = 'multiple_choices';
    private const MULTIPLE_CHOICES_TITLE = 'Multiple Choices';

    private const MOVED_PERMANENTLY_CODE = 301;
    private const MOVED_PERMANENTLY_TYPE = 'moved_permanently';
    private const MOVED_PERMANENTLY_TITLE = 'Moved Permanently';

    private const FOUND_CODE = 302;
    private const FOUND_TYPE = 'found';
    private const FOUND_TITLE = 'Found';

    private const SEE_OTHER_CODE = 303;
    private const SEE_OTHER_TYPE = 'see_other';
    private const SEE_OTHER_TITLE = 'See Other';

    private const NOT_MODIFIED_CODE = 304;
    private const NOT_MODIFIED_TYPE = 'not_modified';
    private const NOT_MODIFIED_TITLE = 'Not Modified';

    private const USE_PROXY_DEPRECATED_CODE = 305;
    private const USE_PROXY_DEPRECATED_TYPE = 'use_proxy_deprecated';
    private const USE_PROXY_DEPRECATED_TITLE = 'Use Proxy Deprecated';

    private const TEMPORARY_REDIRECT_CODE = 307;
    private const TEMPORARY_REDIRECT_TYPE = 'temporary_redirect';
    private const TEMPORARY_REDIRECT_TITLE = 'Temporary Redirect';

    private const PERMANENT_REDIRECT_CODE = 308;
    private const PERMANENT_REDIRECT_TYPE = 'permanent_redirect';
    private const PERMANENT_REDIRECT_TITLE = 'Permanent Redirect';

    case MultipleChoices = self::MULTIPLE_CHOICES_CODE;
    case MovedPermanently = self::MOVED_PERMANENTLY_CODE;
    case Found = self::FOUND_CODE;
    case SeeOther = self::SEE_OTHER_CODE;
    case NotModified = self::NOT_MODIFIED_CODE;
    case UseProxyDeprecated = self::USE_PROXY_DEPRECATED_CODE;
    case TemporaryRedirect = self::TEMPORARY_REDIRECT_CODE;
    case PermanentRedirect = self::PERMANENT_REDIRECT_CODE;

    public function getStatus(): StatusInterface
    {
        return match ($this) {
            self::MultipleChoices => new Status(
                self::MULTIPLE_CHOICES_CODE,
                self::MULTIPLE_CHOICES_TYPE,
                self::MULTIPLE_CHOICES_TITLE,
            ),
            self::MovedPermanently => new Status(
                self::MOVED_PERMANENTLY_CODE,
                self::MOVED_PERMANENTLY_TYPE,
                self::MOVED_PERMANENTLY_TITLE,
            ),
            self::Found => new Status(
                self::FOUND_CODE,
                self::FOUND_TYPE,
                self::FOUND_TITLE,
            ),
            self::SeeOther => new Status(
                self::SEE_OTHER_CODE,
                self::SEE_OTHER_TYPE,
                self::SEE_OTHER_TITLE,
            ),
            self::NotModified => new Status(
                self::NOT_MODIFIED_CODE,
                self::NOT_MODIFIED_TYPE,
                self::NOT_MODIFIED_TITLE,
            ),
            self::UseProxyDeprecated => new Status(
                self::USE_PROXY_DEPRECATED_CODE,
                self::USE_PROXY_DEPRECATED_TYPE,
                self::USE_PROXY_DEPRECATED_TITLE,
            ),
            self::TemporaryRedirect => new Status(
                self::TEMPORARY_REDIRECT_CODE,
                self::TEMPORARY_REDIRECT_TYPE,
                self::TEMPORARY_REDIRECT_TITLE,
            ),
            self::PermanentRedirect => new Status(
                self::PERMANENT_REDIRECT_CODE,
                self::PERMANENT_REDIRECT_TYPE,
                self::PERMANENT_REDIRECT_TITLE,
            ),
        };
    }
}
