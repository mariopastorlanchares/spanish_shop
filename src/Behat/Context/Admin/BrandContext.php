<?php

declare(strict_types=1);

namespace App\Behat\Context\Admin;

use App\Behat\Page\Admin\Brand\CreatePage;
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class BrandContext implements Context
{
    private $createPage;

    public function __construct(CreatePage $createPage)
    {
        $this->createPage = $createPage;
    }

    /**
     * @When I want to create a new brand
     */
    public function iWantToCreateANewBrand()
    {
        $this->createPage->open();
    }

    /**
     * @When I specify its name as :arg1
     */
    public function iSpecifyItsNameAs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I add it
     */
    public function iAddIt()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be notified that it has been successfully created
     */
    public function iShouldBeNotifiedThatItHasBeenSuccessfullyCreated()
    {
        throw new PendingException();
    }

    /**
     * @Then the brand :arg1 should appear in the registry
     */
    public function theBrandShouldAppearInTheRegistry($arg1)
    {
        throw new PendingException();
    }
}
