<?php
declare(strict_types = 1);

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Tests\Unit\Internal\Configuration\Module;


use OxidEsales\EshopCommunity\Internal\Configuration\Module\DataObject\ShopConfiguration;
use PHPUnit\Framework\TestCase;

class ShopConfigurationTest extends TestCase
{
    private $shopConfiguration;

    protected function setUp()
    {
        parent::setUp();
        $this->shopConfiguration = new ShopConfiguration();
    }
}