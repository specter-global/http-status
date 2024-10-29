@default
Feature: SuccessfulHttpStatusTest

  Scenario Outline: Instance of SuccessfulHttpStatus
    Given successful http status with code <code>
    When I get an instance of StatusInterface object
    Then the status of object should be with code <code>
    Then the status of object should be with type <type>
    Then the status of object should be with title <title>

    Examples:
      | code | type                            | title                           |
      | 200  | "ok"                            | "OK"                            |
      | 201  | "created"                       | "Created"                       |
      | 202  | "accepted"                      | "Accepted"                      |
      | 203  | "non_authoritative_information" | "Non-Authoritative Information" |
      | 204  | "no_content"                    | "No Content"                    |
      | 205  | "reset_content"                 | "Reset Content"                 |
      | 206  | "partial_content"               | "Partial Content"               |
      | 207  | "multi_status"                  | "Multi-Status"                  |
      | 208  | "already_reported"              | "Already Reported"              |
      | 226  | "im_used"                       | "IM Used"                       |
