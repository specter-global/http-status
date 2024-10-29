<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\Status;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

enum ClientErrorHttpStatus: int implements HttpStatusInterface
{
    private const BAD_REQUEST_CODE = 400;
    private const BAD_REQUEST_TYPE = 'bad_request';
    private const BAD_REQUEST_TITLE = 'Bad Request';
    private const BAD_REQUEST_STATUS_CASE = [
        self::BAD_REQUEST_CODE,
        self::BAD_REQUEST_TYPE,
        self::BAD_REQUEST_TITLE,
    ];

    private const UNAUTHORIZED_CODE = 401;
    private const UNAUTHORIZED_TYPE = 'unauthorized';
    private const UNAUTHORIZED_TITLE = 'Unauthorized';
    private const UNAUTHORIZED_STATUS_CASE = [
        self::UNAUTHORIZED_CODE,
        self::UNAUTHORIZED_TYPE,
        self::UNAUTHORIZED_TITLE,
    ];

    private const PAYMENT_REQUIRED_CODE = 402;
    private const PAYMENT_REQUIRED_TYPE = 'payment_required';
    private const PAYMENT_REQUIRED_TITLE = 'Payment Required';
    private const PAYMENT_REQUIRED_STATUS_CASE = [
        self::PAYMENT_REQUIRED_CODE,
        self::PAYMENT_REQUIRED_TYPE,
        self::PAYMENT_REQUIRED_TITLE,
    ];

    private const FORBIDDEN_CODE = 403;
    private const FORBIDDEN_TYPE = 'forbidden';
    private const FORBIDDEN_TITLE = 'Forbidden';
    private const FORBIDDEN_STATUS_CASE = [
        self::FORBIDDEN_CODE,
        self::FORBIDDEN_TYPE,
        self::FORBIDDEN_TITLE,
    ];

    private const NOT_FOUND_CODE = 404;
    private const NOT_FOUND_TYPE = 'not_found';
    private const NOT_FOUND_TITLE = 'Not Found';
    private const NOT_FOUND_STATUS_CASE = [
        self::NOT_FOUND_CODE,
        self::NOT_FOUND_TYPE,
        self::NOT_FOUND_TITLE,
    ];

    private const METHOD_NOT_ALLOWED_CODE = 405;
    private const METHOD_NOT_ALLOWED_TYPE = 'method_not_allowed';
    private const METHOD_NOT_ALLOWED_TITLE = 'Method Not Allowed';
    private const METHOD_NOT_ALLOWED_STATUS_CASE = [
        self::METHOD_NOT_ALLOWED_CODE,
        self::METHOD_NOT_ALLOWED_TYPE,
        self::METHOD_NOT_ALLOWED_TITLE,
    ];

    private const NOT_ACCEPTABLE_CODE = 406;
    private const NOT_ACCEPTABLE_TYPE = 'not_acceptable';
    private const NOT_ACCEPTABLE_TITLE = 'Not Acceptable';
    private const NOT_ACCEPTABLE_STATUS_CASE = [
        self::NOT_ACCEPTABLE_CODE,
        self::NOT_ACCEPTABLE_TYPE,
        self::NOT_ACCEPTABLE_TITLE,
    ];

    private const PROXY_AUTHENTICATION_REQUIRED_CODE = 407;
    private const PROXY_AUTHENTICATION_REQUIRED_TYPE = 'proxy_authentication_required';
    private const PROXY_AUTHENTICATION_REQUIRED_TITLE = 'Proxy Authentication Required';
    private const PROXY_AUTHENTICATION_REQUIRED_STATUS_CASE = [
        self::PROXY_AUTHENTICATION_REQUIRED_CODE,
        self::PROXY_AUTHENTICATION_REQUIRED_TYPE,
        self::PROXY_AUTHENTICATION_REQUIRED_TITLE,
    ];

    private const REQUEST_TIMEOUT_CODE = 408;
    private const REQUEST_TIMEOUT_TYPE = 'request_timeout';
    private const REQUEST_TIMEOUT_TITLE = 'Request Timeout';
    private const REQUEST_TIMEOUT_STATUS_CASE = [
        self::REQUEST_TIMEOUT_CODE,
        self::REQUEST_TIMEOUT_TYPE,
        self::REQUEST_TIMEOUT_TITLE,
    ];

    private const CONFLICT_CODE = 409;
    private const CONFLICT_TYPE = 'conflict';
    private const CONFLICT_TITLE = 'Conflict';
    private const CONFLICT_STATUS_CASE = [
        self::CONFLICT_CODE,
        self::CONFLICT_TYPE,
        self::CONFLICT_TITLE,
    ];

    private const GONE_CODE = 410;
    private const GONE_TYPE = 'gone';
    private const GONE_TITLE = 'Gone';
    private const GONE_STATUS_CASE = [
        self::GONE_CODE,
        self::GONE_TYPE,
        self::GONE_TITLE,
    ];

    private const LENGTH_REQUIRED_CODE = 411;
    private const LENGTH_REQUIRED_TYPE = 'length_required';
    private const LENGTH_REQUIRED_TITLE = 'Length Required';
    private const LENGTH_REQUIRED_STATUS_CASE = [
        self::LENGTH_REQUIRED_CODE,
        self::LENGTH_REQUIRED_TYPE,
        self::LENGTH_REQUIRED_TITLE,
    ];

    private const PRECONDITION_FAILED_CODE = 412;
    private const PRECONDITION_FAILED_TYPE = 'precondition_failed';
    private const PRECONDITION_FAILED_TITLE = 'Precondition Failed';
    private const PRECONDITION_FAILED_STATUS_CASE = [
        self::PRECONDITION_FAILED_CODE,
        self::PRECONDITION_FAILED_TYPE,
        self::PRECONDITION_FAILED_TITLE,
    ];

    private const PAYLOAD_TOO_LARGE_CODE = 413;
    private const PAYLOAD_TOO_LARGE_TYPE = 'payload_too_large';
    private const PAYLOAD_TOO_LARGE_TITLE = 'Payload Too Large';
    private const PAYLOAD_TOO_LARGE_STATUS_CASE = [
        self::PAYLOAD_TOO_LARGE_CODE,
        self::PAYLOAD_TOO_LARGE_TYPE,
        self::PAYLOAD_TOO_LARGE_TITLE,
    ];

    private const URI_TOO_LONG_CODE = 414;
    private const URI_TOO_LONG_TYPE = 'uri_too_long';
    private const URI_TOO_LONG_TITLE = 'Uri Too Long';
    private const URI_TOO_LONG_STATUS_CASE = [
        self::URI_TOO_LONG_CODE,
        self::URI_TOO_LONG_TYPE,
        self::URI_TOO_LONG_TITLE,
    ];

    private const UNSUPPORTED_MEDIA_TYPE_CODE = 415;
    private const UNSUPPORTED_MEDIA_TYPE_TYPE = 'unsupported_media_type';
    private const UNSUPPORTED_MEDIA_TYPE_TITLE = 'Unsupported Media Type';
    private const UNSUPPORTED_MEDIA_TYPE_STATUS_CASE = [
        self::UNSUPPORTED_MEDIA_TYPE_CODE,
        self::UNSUPPORTED_MEDIA_TYPE_TYPE,
        self::UNSUPPORTED_MEDIA_TYPE_TITLE,
    ];

    private const RANGE_NOT_SATISFIABLE_CODE = 416;
    private const RANGE_NOT_SATISFIABLE_TYPE = 'range_not_satisfiable';
    private const RANGE_NOT_SATISFIABLE_TITLE = 'Range Not Satisfiable';
    private const RANGE_NOT_SATISFIABLE_STATUS_CASE = [
        self::RANGE_NOT_SATISFIABLE_CODE,
        self::RANGE_NOT_SATISFIABLE_TYPE,
        self::RANGE_NOT_SATISFIABLE_TITLE,
    ];

    private const EXPECTATION_FAILED_CODE = 417;
    private const EXPECTATION_FAILED_TYPE = 'expectation_failed';
    private const EXPECTATION_FAILED_TITLE = 'Expectation Failed';
    private const EXPECTATION_FAILED_STATUS_CASE = [
        self::EXPECTATION_FAILED_CODE,
        self::EXPECTATION_FAILED_TYPE,
        self::EXPECTATION_FAILED_TITLE,
    ];

    private const IM_A_TEAPOT_CODE = 418;
    private const IM_A_TEAPOT_TYPE = 'im_a_teapot';
    private const IM_A_TEAPOT_TITLE = 'I\'m a teapot';
    private const IM_A_TEAPOT_STATUS_CASE = [
        self::IM_A_TEAPOT_CODE,
        self::IM_A_TEAPOT_TYPE,
        self::IM_A_TEAPOT_TITLE,
    ];

    private const MISDIRECTED_REQUEST_CODE = 421;
    private const MISDIRECTED_REQUEST_TYPE = 'misdirected_request';
    private const MISDIRECTED_REQUEST_TITLE = 'Misdirected Request';
    private const MISDIRECTED_REQUEST_STATUS_CASE = [
        self::MISDIRECTED_REQUEST_CODE,
        self::MISDIRECTED_REQUEST_TYPE,
        self::MISDIRECTED_REQUEST_TITLE,
    ];

    private const UNPROCESSABLE_CONTENT_CODE = 422;
    private const UNPROCESSABLE_CONTENT_TYPE = 'unprocessable_content';
    private const UNPROCESSABLE_CONTENT_TITLE = 'Unprocessable Content';
    private const UNPROCESSABLE_CONTENT_STATUS_CASE = [
        self::UNPROCESSABLE_CONTENT_CODE,
        self::UNPROCESSABLE_CONTENT_TYPE,
        self::UNPROCESSABLE_CONTENT_TITLE,
    ];

    private const LOCKED_CODE = 423;
    private const LOCKED_TYPE = 'locked';
    private const LOCKED_TITLE = 'Locked';
    private const LOCKED_STATUS_CASE = [
        self::LOCKED_CODE,
        self::LOCKED_TYPE,
        self::LOCKED_TITLE,
    ];

    private const FAILED_DEPENDENCY_CODE = 424;
    private const FAILED_DEPENDENCY_TYPE = 'failed_dependency';
    private const FAILED_DEPENDENCY_TITLE = 'Failed Dependency';
    private const FAILED_DEPENDENCY_STATUS_CASE = [
        self::FAILED_DEPENDENCY_CODE,
        self::FAILED_DEPENDENCY_TYPE,
        self::FAILED_DEPENDENCY_TITLE,
    ];

    private const TOO_EARLY_CODE = 425;
    private const TOO_EARLY_TYPE = 'too_early';
    private const TOO_EARLY_TITLE = 'Too Early';
    private const TOO_EARLY_STATUS_CASE = [
        self::TOO_EARLY_CODE,
        self::TOO_EARLY_TYPE,
        self::TOO_EARLY_TITLE,
    ];

    private const UPGRADE_REQUIRED_CODE = 426;
    private const UPGRADE_REQUIRED_TYPE = 'upgrade_required';
    private const UPGRADE_REQUIRED_TITLE = 'Upgrade Required';
    private const UPGRADE_REQUIRED_STATUS_CASE = [
        self::UPGRADE_REQUIRED_CODE,
        self::UPGRADE_REQUIRED_TYPE,
        self::UPGRADE_REQUIRED_TITLE,
    ];

    private const PRECONDITION_REQUIRED_CODE = 428;
    private const PRECONDITION_REQUIRED_TYPE = 'precondition_required';
    private const PRECONDITION_REQUIRED_TITLE = 'Precondition Required';
    private const PRECONDITION_REQUIRED_STATUS_CASE = [
        self::PRECONDITION_REQUIRED_CODE,
        self::PRECONDITION_REQUIRED_TYPE,
        self::PRECONDITION_REQUIRED_TITLE,
    ];

    private const TOO_MANY_REQUESTS_CODE = 429;
    private const TOO_MANY_REQUESTS_TYPE = 'too_many_requests';
    private const TOO_MANY_REQUESTS_TITLE = 'Too Many Requests';
    private const TOO_MANY_REQUESTS_STATUS_CASE = [
        self::TOO_MANY_REQUESTS_CODE,
        self::TOO_MANY_REQUESTS_TYPE,
        self::TOO_MANY_REQUESTS_TITLE,
    ];

    private const REQUEST_HEADER_FIELDS_TOO_LARGE_CODE = 431;
    private const REQUEST_HEADER_FIELDS_TOO_LARGE_TYPE = 'request_header_fields_too_large';
    private const REQUEST_HEADER_FIELDS_TOO_LARGE_TITLE = 'Request Header Fields Too Large';
    private const REQUEST_HEADER_FIELDS_TOO_LARGE_STATUS_CASE = [
        self::REQUEST_HEADER_FIELDS_TOO_LARGE_CODE,
        self::REQUEST_HEADER_FIELDS_TOO_LARGE_TYPE,
        self::REQUEST_HEADER_FIELDS_TOO_LARGE_TITLE,
    ];

    private const UNAVAILABLE_FOR_LEGAL_REASONS_CODE = 451;
    private const UNAVAILABLE_FOR_LEGAL_REASONS_TYPE = 'unavailable_for_legal_reasons';
    private const UNAVAILABLE_FOR_LEGAL_REASONS_TITLE = 'Unavailable For Legal Reasons';
    private const UNAVAILABLE_FOR_LEGAL_REASONS_STATUS_CASE = [
        self::UNAVAILABLE_FOR_LEGAL_REASONS_CODE,
        self::UNAVAILABLE_FOR_LEGAL_REASONS_TYPE,
        self::UNAVAILABLE_FOR_LEGAL_REASONS_TITLE,
    ];

    case BadRequest = self::BAD_REQUEST_CODE;
    case Unauthorized = self::UNAUTHORIZED_CODE;
    case PaymentRequired = self::PAYMENT_REQUIRED_CODE;
    case Forbidden = self::FORBIDDEN_CODE;
    case NotFound = self::NOT_FOUND_CODE;
    case MethodNotAllowed = self::METHOD_NOT_ALLOWED_CODE;
    case NotAcceptable = self::NOT_ACCEPTABLE_CODE;
    case ProxyAuthenticationRequired = self::PROXY_AUTHENTICATION_REQUIRED_CODE;
    case RequestTimeout = self::REQUEST_TIMEOUT_CODE;
    case Conflict = self::CONFLICT_CODE;
    case Gone = self::GONE_CODE;
    case LengthRequired = self::LENGTH_REQUIRED_CODE;
    case PreconditionFailed = self::PRECONDITION_FAILED_CODE;
    case PayloadTooLarge = self::PAYLOAD_TOO_LARGE_CODE;
    case UriTooLong = self::URI_TOO_LONG_CODE;
    case UnsupportedMediaType = self::UNSUPPORTED_MEDIA_TYPE_CODE;
    case RangeNotSatisfiable = self::RANGE_NOT_SATISFIABLE_CODE;
    case ExpectationFailed = self::EXPECTATION_FAILED_CODE;
    case ImATeapot = self::IM_A_TEAPOT_CODE;
    case MisdirectedRequest = self::MISDIRECTED_REQUEST_CODE;
    case UnprocessableContent = self::UNPROCESSABLE_CONTENT_CODE;
    case Locked = self::LOCKED_CODE;
    case FailedDependency = self::FAILED_DEPENDENCY_CODE;
    case TooEarly = self::TOO_EARLY_CODE;
    case UpgradeRequired = self::UPGRADE_REQUIRED_CODE;
    case PreconditionRequired = self::PRECONDITION_REQUIRED_CODE;
    case TooManyRequests = self::TOO_MANY_REQUESTS_CODE;
    case RequestHeaderFieldsTooLarge = self::REQUEST_HEADER_FIELDS_TOO_LARGE_CODE;
    case UnavailableForLegalReasons = self::UNAVAILABLE_FOR_LEGAL_REASONS_CODE;

    public function getStatus(): StatusInterface
    {
        return match ($this) {
            self::BadRequest => new Status(
                ...self::BAD_REQUEST_STATUS_CASE
            ),
            self::Unauthorized => new Status(
                ...self::UNAUTHORIZED_STATUS_CASE
            ),
            self::PaymentRequired => new Status(
                ...self::PAYMENT_REQUIRED_STATUS_CASE
            ),
            self::Forbidden => new Status(
                ...self::FORBIDDEN_STATUS_CASE
            ),
            self::NotFound => new Status(
                ...self::NOT_FOUND_STATUS_CASE
            ),
            self::MethodNotAllowed => new Status(
                ...self::METHOD_NOT_ALLOWED_STATUS_CASE
            ),
            self::NotAcceptable => new Status(
                ...self::NOT_ACCEPTABLE_STATUS_CASE
            ),
            self::ProxyAuthenticationRequired => new Status(
                ...self::PROXY_AUTHENTICATION_REQUIRED_STATUS_CASE
            ),
            self::RequestTimeout => new Status(
                ...self::REQUEST_TIMEOUT_STATUS_CASE
            ),
            self::Conflict => new Status(
                ...self::CONFLICT_STATUS_CASE
            ),
            self::Gone => new Status(
                ...self::GONE_STATUS_CASE
            ),
            self::LengthRequired => new Status(
                ...self::LENGTH_REQUIRED_STATUS_CASE
            ),
            self::PreconditionFailed => new Status(
                ...self::PRECONDITION_FAILED_STATUS_CASE
            ),
            self::PayloadTooLarge => new Status(
                ...self::PAYLOAD_TOO_LARGE_STATUS_CASE,
            ),
            self::UriTooLong => new Status(
                ...self::URI_TOO_LONG_STATUS_CASE,
            ),
            self::UnsupportedMediaType => new Status(
                ...self::UNSUPPORTED_MEDIA_TYPE_STATUS_CASE
            ),
            self::RangeNotSatisfiable => new Status(
                ...self::RANGE_NOT_SATISFIABLE_STATUS_CASE
            ),
            self::ExpectationFailed => new Status(
                ...self::EXPECTATION_FAILED_STATUS_CASE
            ),
            self::ImATeapot => new Status(
                ...self::IM_A_TEAPOT_STATUS_CASE
            ),
            self::MisdirectedRequest => new Status(
                ...self::MISDIRECTED_REQUEST_STATUS_CASE
            ),
            self::UnprocessableContent => new Status(
                ...self::UNPROCESSABLE_CONTENT_STATUS_CASE
            ),
            self::Locked => new Status(
                ...self::LOCKED_STATUS_CASE
            ),
            self::FailedDependency => new Status(
                ...self::FAILED_DEPENDENCY_STATUS_CASE
            ),
            self::TooEarly => new Status(
                ...self::TOO_EARLY_STATUS_CASE
            ),
            self::UpgradeRequired => new Status(
                ...self::UPGRADE_REQUIRED_STATUS_CASE
            ),
            self::PreconditionRequired => new Status(
                ...self::PRECONDITION_REQUIRED_STATUS_CASE
            ),
            self::TooManyRequests => new Status(
                ...self::TOO_MANY_REQUESTS_STATUS_CASE
            ),
            self::RequestHeaderFieldsTooLarge => new Status(
                ...self::REQUEST_HEADER_FIELDS_TOO_LARGE_STATUS_CASE
            ),
            self::UnavailableForLegalReasons => new Status(
                ...self::UNAVAILABLE_FOR_LEGAL_REASONS_STATUS_CASE
            ),
        };
    }
}
