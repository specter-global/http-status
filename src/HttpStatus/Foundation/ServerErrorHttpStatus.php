<?php

declare(strict_types=1);

namespace SpecterGlobal\HttpStatus\Foundation;

use SpecterGlobal\HttpStatus\Foundation\Status\Status;
use SpecterGlobal\HttpStatus\Foundation\Status\StatusInterface;

enum ServerErrorHttpStatus: int implements HttpStatusInterface
{
    private const INTERNAL_SERVER_ERROR_CODE = 500;
    private const INTERNAL_SERVER_ERROR_TYPE = 'internal_server_error';
    private const INTERNAL_SERVER_ERROR_TITLE = 'Internal Server Error';

    private const NOT_IMPLEMENTED_CODE = 501;
    private const NOT_IMPLEMENTED_TYPE = 'not_implemented';
    private const NOT_IMPLEMENTED_TITLE = 'Not Implemented';

    private const BAD_GATEWAY_CODE = 502;
    private const BAD_GATEWAY_TYPE = 'bad_gateway';
    private const BAD_GATEWAY_TITLE = 'Bad Gateway';

    private const SERVICE_UNAVAILABLE_CODE = 503;
    private const SERVICE_UNAVAILABLE_TYPE = 'service_unavailable';
    private const SERVICE_UNAVAILABLE_TITLE = 'Service Unavailable';

    private const GATEWAY_TIMEOUT_CODE = 504;
    private const GATEWAY_TIMEOUT_TYPE = 'gateway_timeout';
    private const GATEWAY_TIMEOUT_TITLE = 'Gateway Timeout';

    private const HTTP_VERSION_NOT_SUPPORTED_CODE = 505;
    private const HTTP_VERSION_NOT_SUPPORTED_TYPE = 'http_version_not_supported';
    private const HTTP_VERSION_NOT_SUPPORTED_TITLE = 'HTTP Version Not Supported';

    private const VARIANT_ALSO_NEGOTIATES_CODE = 506;
    private const VARIANT_ALSO_NEGOTIATES_TYPE = 'variant_also_negotiates';
    private const VARIANT_ALSO_NEGOTIATES_TITLE = 'Variant Also Negotiates';

    private const INSUFFICIENT_STORAGE_CODE = 507;
    private const INSUFFICIENT_STORAGE_TYPE = 'insufficient_storage';
    private const INSUFFICIENT_STORAGE_TITLE = 'Insufficient Storage';

    private const LOOP_DETECTED_CODE = 508;
    private const LOOP_DETECTED_TYPE = 'loop_detected';
    private const LOOP_DETECTED_TITLE = 'Loop Detected';

    private const NOT_EXTENDED_CODE = 510;
    private const NOT_EXTENDED_TYPE = 'not_extended';
    private const NOT_EXTENDED_TITLE = 'Not Extended';

    private const NETWORK_AUTHENTICATION_REQUIRED_CODE = 511;
    private const NETWORK_AUTHENTICATION_REQUIRED_TYPE = 'network_authentication_required';
    private const NETWORK_AUTHENTICATION_REQUIRED_TITLE = 'Network Authentication Required';

    case InternalServerError = self::INTERNAL_SERVER_ERROR_CODE;
    case NotImplemented = self::NOT_IMPLEMENTED_CODE;
    case BadGateway = self::BAD_GATEWAY_CODE;
    case ServiceUnavailable = self::SERVICE_UNAVAILABLE_CODE;
    case GatewayTimeout = self::GATEWAY_TIMEOUT_CODE;
    case HttpVersionNotSupported = self::HTTP_VERSION_NOT_SUPPORTED_CODE;
    case VariantAlsoNegotiates = self::VARIANT_ALSO_NEGOTIATES_CODE;
    case InsufficientStorage = self::INSUFFICIENT_STORAGE_CODE;
    case LoopDetected = self::LOOP_DETECTED_CODE;
    case NotExtended = self::NOT_EXTENDED_CODE;
    case NetworkAuthenticationRequired = self::NETWORK_AUTHENTICATION_REQUIRED_CODE;

    public function getStatus(): StatusInterface
    {
        return match ($this) {
            self::InternalServerError => new Status(
                self::INTERNAL_SERVER_ERROR_CODE,
                self::INTERNAL_SERVER_ERROR_TYPE,
                self::INTERNAL_SERVER_ERROR_TITLE,
            ),
            self::NotImplemented => new Status(
                self::NOT_IMPLEMENTED_CODE,
                self::NOT_IMPLEMENTED_TYPE,
                self::NOT_IMPLEMENTED_TITLE,
            ),
            self::BadGateway => new Status(
                self::BAD_GATEWAY_CODE,
                self::BAD_GATEWAY_TYPE,
                self::BAD_GATEWAY_TITLE,
            ),
            self::ServiceUnavailable => new Status(
                self::SERVICE_UNAVAILABLE_CODE,
                self::SERVICE_UNAVAILABLE_TYPE,
                self::SERVICE_UNAVAILABLE_TITLE,
            ),
            self::GatewayTimeout => new Status(
                self::GATEWAY_TIMEOUT_CODE,
                self::GATEWAY_TIMEOUT_TYPE,
                self::GATEWAY_TIMEOUT_TITLE,
            ),
            self::HttpVersionNotSupported => new Status(
                self::HTTP_VERSION_NOT_SUPPORTED_CODE,
                self::HTTP_VERSION_NOT_SUPPORTED_TYPE,
                self::HTTP_VERSION_NOT_SUPPORTED_TITLE,
            ),
            self::VariantAlsoNegotiates => new Status(
                self::VARIANT_ALSO_NEGOTIATES_CODE,
                self::VARIANT_ALSO_NEGOTIATES_TYPE,
                self::VARIANT_ALSO_NEGOTIATES_TITLE,
            ),
            self::InsufficientStorage => new Status(
                self::INSUFFICIENT_STORAGE_CODE,
                self::INSUFFICIENT_STORAGE_TYPE,
                self::INSUFFICIENT_STORAGE_TITLE,
            ),
            self::LoopDetected => new Status(
                self::LOOP_DETECTED_CODE,
                self::LOOP_DETECTED_TYPE,
                self::LOOP_DETECTED_TITLE,
            ),
            self::NotExtended => new Status(
                self::NOT_EXTENDED_CODE,
                self::NOT_EXTENDED_TYPE,
                self::NOT_EXTENDED_TITLE,
            ),
            self::NetworkAuthenticationRequired => new Status(
                self::NETWORK_AUTHENTICATION_REQUIRED_CODE,
                self::NETWORK_AUTHENTICATION_REQUIRED_TYPE,
                self::NETWORK_AUTHENTICATION_REQUIRED_TITLE,
            ),
        };
    }
}
