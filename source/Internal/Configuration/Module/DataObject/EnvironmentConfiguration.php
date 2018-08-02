<?php
declare(strict_types = 1);

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Configuration\Module\DataObject;

/**
 * @internal
 */
class EnvironmentConfiguration
{
    /** @var ShopConfiguration */
    private $shopConfigurations;

    /**
     * @param int $shopId
     *
     * @return ShopConfiguration
     */
    public function getShopConfiguration(int $shopId): ShopConfiguration
    {
        return $this->shopConfigurations[$shopId];
    }

    /**
     * @return array
     */
    public function getShopIdsOfShopConfigurations() :array
    {
        return array_keys($this->shopConfigurations);
    }

    /**
     * @param int               $shopId
     * @param ShopConfiguration $shopConfiguration
     */
    public function setShopConfiguration(int $shopId, ShopConfiguration $shopConfiguration)
    {
        $this->shopConfigurations[$shopId] = $shopConfiguration;
    }

    /**
     * @param int $shopId
     */
    public function deleteShopConfiguration(int $shopId)
    {
        unset($this->shopConfigurations[$shopId]);
    }
}
