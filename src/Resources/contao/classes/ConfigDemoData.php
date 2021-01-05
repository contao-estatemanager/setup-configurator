<?php

namespace ContaoEstateManager\SetupConfigurator;

use ContaoEstateManager\InterfaceModel;

/**
 * Configurator module "demo data".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ConfigDemoData extends Configurator implements \executable
{
    /**
     * Name
     * @var string
     */
    protected $configName = 'demodata';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'conf_demo_data';

    /**
     * Compile Template
     * @return string
     */
    public function compile()
    {
        $this->objTemplate->interfaces = null;

        $objInterfaces = InterfaceModel::findAll();

        if(null !== $objInterfaces)
        {
            $arrInterfaces = [];

            while ($objInterfaces->next())
            {
                $arrInterfaces[ $objInterfaces->id ] = $objInterfaces->title;
            }

            $this->objTemplate->interfaces = $arrInterfaces;
        }

        $this->objTemplate->labelEstate = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_import'][0];
        $this->objTemplate->descEstate = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_import'][1];

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        // ToDo: Import
    }
}
