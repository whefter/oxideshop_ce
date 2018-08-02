<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Configuration\Module\DataObject;

/**
 * @internal
 */
class ShopConfiguration
{
    /** @var ModuleConfiguration */
    private $moduleConfigurations;

    /**
     * @param string $id
     *
     * @return ModuleConfiguration
     */
    public function getModuleConfiguration(string $id) : ModuleConfiguration
    {
        return new ModuleConfiguration();
    }

    /**
     * @param ModuleConfiguration $moduleConfiguration
     */
    public function setModuleConfiguration(ModuleConfiguration $moduleConfiguration)
    {
    }

    /**
     * @param string $moduleId
     */
    public function deleteModuleConfiguration(string $moduleId)
    {
    }

    /**
     * @return array
     */
    public function getModuleIdsOfModuleConfigurations() : array
    {
        return [];
    }
}
