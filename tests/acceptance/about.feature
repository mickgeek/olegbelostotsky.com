Feature: About page
    In order to see additional information about yourself
    As a visitor
    I need to be able to show page context

Scenario: Show home page context
    Given I am on "/about"
    Then I should see "About"
