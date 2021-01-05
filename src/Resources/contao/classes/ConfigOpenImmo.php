<?php

namespace ContaoEstateManager\SetupConfigurator;

use Contao\Input;
use ContaoEstateManager\EstateManager;

/**
 * Configurator module "open immo".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ConfigOpenImmo extends Configurator implements \executable
{
    /**
     * Name
     * @var string
     */
    protected $configName = 'openimmo';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'conf_open_immo';

    /**
     * Compile Template
     * @return string
     */
    public function compile()
    {
        $this->objTemplate->labelImport = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_import'][0];
        $this->objTemplate->descImport = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_import'][1];

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        $objInterface = $this->getInterface();
        Input::setGet('id', $objInterface->id);

        $objEstateManager = new EstateManager();
        $objEstateManager->importDefaultMappings();

        $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_log_created']);
    }
}
