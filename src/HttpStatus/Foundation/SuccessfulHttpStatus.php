<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\Status;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

enum SuccessfulHttpStatus: int implements HttpStatusInterface
{
    private const OK_CODE = 200;
    private const OK_TYPE = 'ok';
    private const OK_TITLE = 'OK';

    private const CREATED_CODE = 201;
    private const CREATED_TYPE = 'created';
    private const CREATED_TITLE = 'Created';

    private const ACCEPTED_CODE = 202;
    private const ACCEPTED_TYPE = 'accepted';
    private const ACCEPTED_TITLE = 'Accepted';

    private const NON_AUTHORITATIVE_INFORMATION_CODE = 203;
    private const NON_AUTHORITATIVE_INFORMATION_TYPE = 'non_authoritative_information';
    private const NON_AUTHORITATIVE_INFORMATION_TITLE = 'Non-Authoritative Information';

    private const NO_CONTENT_CODE = 204;
    private const NO_CONTENT_TYPE = 'no_content';
    private const NO_CONTENT_TITLE = 'No Content';

    private const RESET_CONTENT_CODE = 205;
    private const RESET_CONTENT_TYPE = 'reset_content';
    private const RESET_CONTENT_TITLE = 'Reset Content';

    private const PARTIAL_CONTENT_CODE = 206;
    private const PARTIAL_CONTENT_TYPE = 'partial_content';
    private const PARTIAL_CONTENT_TITLE = 'Partial Content';

    private const MULTI_STATUS_CODE = 207;
    private const MULTI_STATUS_TYPE = 'multi_status';
    private const MULTI_STATUS_TITLE = 'Multi-Status';

    private const ALREADY_REPORTED_CODE = 208;
    private const ALREADY_REPORTED_TYPE = 'already_reported';
    private const ALREADY_REPORTED_TITLE = 'Already Reported';

    private const IM_USED_CODE = 226;
    private const IM_USED_TYPE = 'im_used';
    private const IM_USED_TITLE = 'IM Used';

    case Ok = self::OK_CODE;
    case Created = self::CREATED_CODE;
    case Accepted = self::ACCEPTED_CODE;
    case NonAuthoritativeInformation = self::NON_AUTHORITATIVE_INFORMATION_CODE;
    case NoContent = self::NO_CONTENT_CODE;
    case ResetContent = self::RESET_CONTENT_CODE;
    case PartialContent = self::PARTIAL_CONTENT_CODE;
    case MultiStatus = self::MULTI_STATUS_CODE;
    case AlreadyReported = self::ALREADY_REPORTED_CODE;
    case ImUsed = self::IM_USED_CODE;

    public function getStatus(): StatusInterface
    {
        return match ($this) {
            self::Ok => new Status(
                self::OK_CODE,
                self::OK_TYPE,
                self::OK_TITLE,
            ),
            self::Created => new Status(
                self::CREATED_CODE,
                self::CREATED_TYPE,
                self::CREATED_TITLE,
            ),
            self::Accepted => new Status(
                self::ACCEPTED_CODE,
                self::ACCEPTED_TYPE,
                self::ACCEPTED_TITLE,
            ),
            self::NonAuthoritativeInformation => new Status(
                self::NON_AUTHORITATIVE_INFORMATION_CODE,
                self::NON_AUTHORITATIVE_INFORMATION_TYPE,
                self::NON_AUTHORITATIVE_INFORMATION_TITLE,
            ),
            self::NoContent => new Status(
                self::NO_CONTENT_CODE,
                self::NO_CONTENT_TYPE,
                self::NO_CONTENT_TITLE,
            ),
            self::ResetContent => new Status(
                self::RESET_CONTENT_CODE,
                self::RESET_CONTENT_TYPE,
                self::RESET_CONTENT_TITLE,
            ),
            self::PartialContent => new Status(
                self::PARTIAL_CONTENT_CODE,
                self::PARTIAL_CONTENT_TYPE,
                self::PARTIAL_CONTENT_TITLE,
            ),
            self::MultiStatus => new Status(
                self::MULTI_STATUS_CODE,
                self::MULTI_STATUS_TYPE,
                self::MULTI_STATUS_TITLE,
            ),
            self::AlreadyReported => new Status(
                self::ALREADY_REPORTED_CODE,
                self::ALREADY_REPORTED_TYPE,
                self::ALREADY_REPORTED_TITLE,
            ),
            self::ImUsed => new Status(
                self::IM_USED_CODE,
                self::IM_USED_TYPE,
                self::IM_USED_TITLE,
            ),
        };
    }
}
