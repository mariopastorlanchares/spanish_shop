<?php

declare(strict_types=1);

namespace App\Behat\Page\Admin\Brand;

use Sylius\Behat\Page\Admin\Crud\CreatePage as BaseCreatePage;

class CreatePage extends BaseCreatePage
{
    public function nameIt(string $name): void
    {
        $this->getDocument()->fillField('app_brand_name', $name);
    }

    public function add()
    {
        $this->getDocument()->pressButton('Create');
    }
}
