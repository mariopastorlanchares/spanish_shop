@managing_brands
Feature: Managing brands
    In order to configure my store
    As a store owner
    I want to be able to manage brands

    Background:
        Given the store is available in "English (United States)"
        And I am logged in as an administrator

    @ui
    Scenario: Adding a new brand
        When I want to create a new brand
        And I specify its name as "Nike"
        And I add it
        Then I should be notified that it has been successfully created
        And the brand "nike" should appear in the registry
