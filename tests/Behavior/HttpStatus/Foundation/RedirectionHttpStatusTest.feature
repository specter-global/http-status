@default
Feature: RedirectionHttpStatusTest

  Scenario Outline: Instance of RedirectionHttpStatus
    Given redirection http status with code <code>
    When I get an instance of StatusInterface object
    Then the status of object should be with code <code>
    Then the status of object should be with type <type>
    Then the status of object should be with title <title>

    Examples:
      | code | type                   | title                  |
      | 300  | "multiple_choices"     | "Multiple Choices"     |
      | 301  | "moved_permanently"    | "Moved Permanently"    |
      | 302  | "found"                | "Found"                |
      | 303  | "see_other"            | "See Other"            |
      | 304  | "not_modified"         | "Not Modified"         |
      | 305  | "use_proxy_deprecated" | "Use Proxy Deprecated" |
      | 307  | "temporary_redirect"   | "Temporary Redirect"   |
      | 308  | "permanent_redirect"   | "Permanent Redirect"   |
