<?php

namespace ContaoEstateManager\SetupConfigurator;

use ContaoEstateManager\EstateManager;

/**
 * Configurator module "field format".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ConfigFieldFormat extends Configurator implements \executable
{
    /**
     * Name
     * @var string
     */
    protected $configName = 'fieldformat';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'conf_field_format';

    public function compile(): string
    {
        $this->objTemplate->label = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['fieldformat_import'][0];
        $this->objTemplate->desc = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['fieldformat_import'][1];

        return parent::compile();
    }

    public function run()
    {
        $objEstateManager = new EstateManager();
        $objEstateManager->importFieldFormats();

        $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['fieldformat_log_created']);
    }
}
