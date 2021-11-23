<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager/setup-configurator
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

// Back end modules
$GLOBALS['BE_MOD']['estatemanager']['configurator'] = [
    'hideInNavigation'      => true,
    'callback'              => 'ContaoEstateManager\SetupConfigurator\ModuleRealEstateConfigurator'
];

// Add configuration to administration modules
$GLOBALS['CEM_RAM']['configuration'][] = 'configurator';

// Configurator modules
$GLOBALS['CEM_SC_MODULES'] = [
    'basic'     => ['ContaoEstateManager\SetupConfigurator\ConfigInterface'],
    'interface' => ['ContaoEstateManager\SetupConfigurator\ConfigOpenImmo'],
    'config'    => [
        'ContaoEstateManager\SetupConfigurator\ConfigFieldFormat',
        'ContaoEstateManager\SetupConfigurator\ConfigGroupType',
    ],
    'content'   => ['ContaoEstateManager\SetupConfigurator\ConfigDemoData']
];

$GLOBALS['CEM_SC_IMPORT'] = [
    'group_types' => [
        'living'     => 'group_types_living.sql',
        'commercial' => 'group_types_commercial.sql'
    ]
];

// Style sheet
if (TL_MODE === 'BE')
{
    $GLOBALS['TL_CSS'][] = 'bundles/estatemanagersetupconfigurator/configurator.css';
}
