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
class ProjectConfiguration
{
    /** @var array */
    private $environmentConfigurations = [];

    /**
     * @return array
     */
    public function getNamesOfEnvironmentConfigurations(): array
    {
        return array_keys($this->environmentConfigurations);
    }

    /**
     * @param string $name
     *
     * @return EnvironmentConfiguration
     */
    public function getEnvironmentConfiguration(string $name): EnvironmentConfiguration
    {
        return $this->environmentConfigurations[$name];
    }

    /**
     * @param string                   $name
     * @param EnvironmentConfiguration $environmentConfiguration
     */
    public function setEnvironmentConfiguration(string $name, EnvironmentConfiguration $environmentConfiguration)
    {
        $this->environmentConfigurations[$name] = $environmentConfiguration;
    }

    /**
     * @param string $name
     */
    public function deleteEnvironmentConfiguration(string $name)
    {
        unset($this->environmentConfigurations[$name]);
    }
}
