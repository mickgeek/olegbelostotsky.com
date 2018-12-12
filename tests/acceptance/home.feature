Feature: Home page
    In order to see the resume in a stylised view
    As a visitor
    I need to be able to show home page context

Scenario: Show home page context
    Given I am on "/"
    Then I should see "GET /index.php"
