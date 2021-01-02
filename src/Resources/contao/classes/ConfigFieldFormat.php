<?php

namespace ContaoEstateManager\SetupConfigurator;

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

    public function compile()
    {
        $this->objTemplate->label = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['fieldformat_import'][0];
        $this->objTemplate->desc = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['fieldformat_import'][1];

        return parent::compile();
    }

    public function run()
    {
        // ToDo: Import default field formats
    }

    public function isActive()
    {
        return false;
    }
}