@default
Feature: InformationHttpStatusTest

  Scenario Outline: Instance of InformationHttpStatus
    Given information http status with code <code>
    When I get an instance of StatusInterface object
    Then the status of object should be with code <code>
    Then the status of object should be with type <type>
    Then the status of object should be with title <title>

    Examples:
      | code | type                  | title                 |
      | 100  | "continue"            | "Continue"            |
      | 101  | "switching_protocols" | "Switching Protocols" |
      | 102  | "processing"          | "Processing"          |
      | 103  | "early_hints"         | "Early Hints"         |
