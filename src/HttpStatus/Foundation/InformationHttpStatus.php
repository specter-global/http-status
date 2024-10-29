<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\Status;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

enum InformationHttpStatus: int implements HttpStatusInterface
{
    private const CONTINUE_CODE = 100;
    private const CONTINUE_TYPE = 'continue';
    private const CONTINUE_TITLE = 'Continue';
    private const CONTINUE_STATUS_CASE = [
        self::CONTINUE_CODE,
        self::CONTINUE_TYPE,
        self::CONTINUE_TITLE,
    ];

    private const SWITCHING_PROTOCOLS_CODE = 101;
    private const SWITCHING_PROTOCOLS_TYPE = 'switching_protocols';
    private const SWITCHING_PROTOCOLS_TITLE = 'Switching Protocols';
    private const SWITCHING_PROTOCOLS_STATUS_CASE = [
        self::SWITCHING_PROTOCOLS_CODE,
        self::SWITCHING_PROTOCOLS_TYPE,
        self::SWITCHING_PROTOCOLS_TITLE,
    ];

    private const PROCESSING_CODE = 102;
    private const PROCESSING_TYPE = 'processing';
    private const PROCESSING_TITLE = 'Processing';
    private const PROCESSING_STATUS_CASE = [
        self::PROCESSING_CODE,
        self::PROCESSING_TYPE,
        self::PROCESSING_TITLE,
    ];

    private const EARLY_HINTS_CODE = 103;
    private const EARLY_HINTS_TYPE = 'early_hints';
    private const EARLY_HINTS_TITLE = 'Early Hints';
    private const EARLY_HINTS_STATUS_CASE = [
        self::EARLY_HINTS_CODE,
        self::EARLY_HINTS_TYPE,
        self::EARLY_HINTS_TITLE,
    ];

    case Continue = self::CONTINUE_CODE;
    case SwitchingProtocols = self::SWITCHING_PROTOCOLS_CODE;
    case Processing = self::PROCESSING_CODE;
    case EarlyHints = self::EARLY_HINTS_CODE;

    public function getStatus(): StatusInterface
    {
        return match ($this) {
            self::Continue => new Status(
                ...self::CONTINUE_STATUS_CASE
            ),
            self::SwitchingProtocols => new Status(
                ...self::SWITCHING_PROTOCOLS_STATUS_CASE
            ),
            self::Processing => new Status(
                ...self::PROCESSING_STATUS_CASE
            ),
            self::EarlyHints => new Status(
                ...self::EARLY_HINTS_STATUS_CASE
            ),
        };
    }
}
