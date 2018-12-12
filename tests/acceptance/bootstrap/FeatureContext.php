<?php

use Behat\Behat\Context\{Context, SnippetAcceptingContext};
use Behat\Gherkin\Node\{PyStringNode, TableNode};
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I click :arg1 element
     */
    public function iClickElement($selector)
    {
        $page = $this->getSession()->getPage();
        $element = $page->find('css', $selector);
        if ($element === null) {
            throw new \RuntimeException('Element not found.');
        }

        $element->click();
    }
}
