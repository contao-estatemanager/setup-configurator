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
$GLOBALS['BE_MOD']['real_estate']['configurator'] = array
(
    'hideInNavigation'      => true,
    'callback'              => 'ContaoEstateManager\SetupConfigurator\ModuleRealEstateConfigurator'
);

// Add configuration to administration modules
array_insert($GLOBALS['TL_RAM']['configuration'], 0, array(
    'configurator'
));

// Configurator modules
$GLOBALS['EM_CONFIGURATOR'] = array
(
    'basic' => array(
        'ContaoEstateManager\SetupConfigurator\ConfigInterface'
    ),
    'interface' => array(
        'ContaoEstateManager\SetupConfigurator\ConfigOpenImmo'
    ),
    'config' => array(
        'ContaoEstateManager\SetupConfigurator\ConfigFieldFormat',
        'ContaoEstateManager\SetupConfigurator\ConfigGroupType',
    ),
    'content' => array(
        'ContaoEstateManager\SetupConfigurator\ConfigDemoData'
    )
);

$GLOBALS['EM_IMPORT'] = array
(
    'group_types' => array(
        'living'     => 'group_types_living.sql',
        'commercial' => 'group_types_commercial.sql'
    )
);

// Style sheet
if (TL_MODE === 'BE')
{
    $GLOBALS['TL_CSS'][] = 'bundles/estatemanagersetupconfigurator/configurator.css';
}
