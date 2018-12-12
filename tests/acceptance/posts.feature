Feature: Posts
    In order to check posts
    As a visitor
    I need to be able to check posts

Scenario: Show the post list
    Given I am on "/posts"
    Then I should see "Posts"

Scenario: Check that a post from the list exists
    Given I am on "/posts"
    When I click "ul.post-list > li > a:first-child" element
    Then the url should match "/posts/\d+"
    And the response status code should be 200

Scenario: Check that a post not exists
    Given I am on "/posts/9999999"
    Then the response status code should be 404
    And I should see "Not Found"
