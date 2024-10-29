@default
Feature: ServerErrorHttpStatusTest

  Scenario Outline: Instance of ServerErrorHttpStatus
    Given server error http status with code <code>
    When I get an instance of StatusInterface object
    Then the status of object should be with code <code>
    Then the status of object should be with type <type>
    Then the status of object should be with title <title>

    Examples:
      | code | type                              | title                             |
      | 500  | "internal_server_error"           | "Internal Server Error"           |
      | 501  | "not_implemented"                 | "Not Implemented"                 |
      | 502  | "bad_gateway"                     | "Bad Gateway"                     |
      | 503  | "service_unavailable"             | "Service Unavailable"             |
      | 504  | "gateway_timeout"                 | "Gateway Timeout"                 |
      | 505  | "http_version_not_supported"      | "HTTP Version Not Supported"      |
      | 506  | "variant_also_negotiates"         | "Variant Also Negotiates"         |
      | 507  | "insufficient_storage"            | "Insufficient Storage"            |
      | 508  | "loop_detected"                   | "Loop Detected"                   |
      | 510  | "not_extended"                    | "Not Extended"                    |
      | 511  | "network_authentication_required" | "Network Authentication Required" |
