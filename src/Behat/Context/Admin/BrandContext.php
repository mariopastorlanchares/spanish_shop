<?php

namespace App\Behat\Context\Admin;

use App\Behat\Page\Admin\Brand\CreatePage;
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Symfony\Component\HttpKernel\KernelInterface;

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
     * @When I specify its name as :name
     */
    public function iSpecifyItsNameAs(string $name)
    {
        $this->createPage->nameIt($name);
    }

    /**
     * @When I add it
     */
    public function iAddIt()
    {
        $this->createPage->add();
    }

    /**
     * @Then I should be notified that it has been successfully created
     */
    public function iShouldBeNotifiedThatItHasBeenSuccessfullyCreated()
    {
        // Implementa la verificación de la notificación
        throw new PendingException();
    }

    /**
     * @Then the brand :name should appear in the registry
     */
    public function theBrandShouldAppearInTheRegistry(string $name)
    {
        // Implementa la verificación de que la marca aparece en el registro
        throw new PendingException();
    }

}
