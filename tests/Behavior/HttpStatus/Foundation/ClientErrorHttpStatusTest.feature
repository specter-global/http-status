@default
Feature: ClientErrorHttpStatusTest

  Scenario Outline: Instance of ClientErrorHttpStatus
    Given client error http status with code <code>
    When I get an instance of StatusInterface object
    Then the status of object should be with code <code>
    Then the status of object should be with type <type>
    Then the status of object should be with title <title>

    Examples:
      | code | type                              | title                             |
      | 400  | "bad_request"                     | "Bad Request"                     |
      | 401  | "unauthorized"                    | "Unauthorized"                    |
      | 402  | "payment_required"                | "Payment Required"                |
      | 403  | "forbidden"                       | "Forbidden"                       |
      | 404  | "not_found"                       | "Not Found"                       |
      | 405  | "method_not_allowed"              | "Method Not Allowed"              |
      | 406  | "not_acceptable"                  | "Not Acceptable"                  |
      | 407  | "proxy_authentication_required"   | "Proxy Authentication Required"   |
      | 408  | "request_timeout"                 | "Request Timeout"                 |
      | 409  | "conflict"                        | "Conflict"                        |
      | 410  | "gone"                            | "Gone"                            |
      | 411  | "length_required"                 | "Length Required"                 |
      | 412  | "precondition_failed"             | "Precondition Failed"             |
      | 413  | "payload_too_large"               | "Payload Too Large"               |
      | 414  | "uri_too_long"                    | "Uri Too Long"                    |
      | 415  | "unsupported_media_type"          | "Unsupported Media Type"          |
      | 416  | "range_not_satisfiable"           | "Range Not Satisfiable"           |
      | 417  | "expectation_failed"              | "Expectation Failed"              |
      | 418  | "im_a_teapot"                     | "I'm a teapot"                    |
      | 421  | "misdirected_request"             | "Misdirected Request"             |
      | 422  | "unprocessable_content"           | "Unprocessable Content"           |
      | 423  | "locked"                          | "Locked"                          |
      | 424  | "failed_dependency"               | "Failed Dependency"               |
      | 425  | "too_early"                       | "Too Early"                       |
      | 426  | "upgrade_required"                | "Upgrade Required"                |
      | 428  | "precondition_required"           | "Precondition Required"           |
      | 429  | "too_many_requests"               | "Too Many Requests"               |
      | 431  | "request_header_fields_too_large" | "Request Header Fields Too Large" |
      | 451  | "unavailable_for_legal_reasons"   | "Unavailable For Legal Reasons"   |
