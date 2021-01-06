<?php

namespace ContaoEstateManager\SetupConfigurator;

use Contao\Folder;
use Contao\Input;
use ContaoEstateManager\ContactPersonModel;

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
        $this->objTemplate->labelEstate = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_import'][0];
        $this->objTemplate->descEstate = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_import'][1];

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        if(!Input::post('estate'))
        {
            return;
        }

        // Get interface and contact person
        $objInterface = $this->getInterface();
        $objContactPerson = ContactPersonModel::findByPid($objInterface->provider, ['limit' => 1]);

        // Move assets
        $sourceDir = 'web/bundles/estatemanagersetupconfigurator/assets/demo';
        $targetDir = 'files/estatemanager/demo';

        $objTarget = new Folder($targetDir);
        $objTarget->unprotect();
        $objTarget->purge();

        $this->moduleLog(sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_log_assets'], $targetDir));

        $objSource = new Folder($sourceDir);
        $objSource->copyTo($targetDir);

        // Truncate database table
        $this->Database->execute("TRUNCATE TABLE tl_real_estate");
        $this->moduleLog(sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_log_truncate'], 'tl_real_estate'));

        // Import estate data
        $this->importFromSql(
            'estate_demo.sql',
            ['{{TIME}}', '{{PROVIDER}}', '{{CONTACT}}'],
            [time(), $objInterface->provider, $objContactPerson->id]
        );

        $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['estate_log_imported']);
    }
}
