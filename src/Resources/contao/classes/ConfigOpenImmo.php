<?php

namespace ContaoEstateManager\SetupConfigurator;

use ContaoEstateManager\InterfaceModel;

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
        $this->objTemplate->interfaces = null;

        $objInterfaces = InterfaceModel::findByType('openimmo');

        if(null !== $objInterfaces)
        {
            $arrInterfaces = [];

            while ($objInterfaces->next())
            {
                $arrInterfaces[ $objInterfaces->id ] = $objInterfaces->title;
            }

            $this->objTemplate->interfaces = $arrInterfaces;
        }

        $this->objTemplate->labelImport = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_import'][0];
        $this->objTemplate->descImport = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_import'][1];
        $this->objTemplate->labelInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_interface'][0];
        $this->objTemplate->descInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_interface'][1];
        $this->objTemplate->labelCreateInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_create_interface'][0];
        $this->objTemplate->descCreateInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_create_interface'][1];
        $this->objTemplate->noInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['openimmo_no_interface'];

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        // ToDo: Import OpenImmo Mapping
    }

    /**
     * Is module active
     * @return false
     */
    public function isActive()
    {
        return false;
    }
}