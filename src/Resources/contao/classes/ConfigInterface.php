<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager/setup-configurator
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

namespace ContaoEstateManager\SetupConfigurator;

use Contao\Folder;
use Contao\Input;

use ContaoEstateManager\ContactPersonModel;
use ContaoEstateManager\InterfaceModel;
use ContaoEstateManager\ProviderModel;

/**
 * Configurator module "interface".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ConfigInterface extends Configurator implements \executable
{
    /**
     * Name
     * @var string
     */
    protected $configName = 'interface';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'conf_interface';

    /**
     * Compile Template
     * @return string
     */
    public function compile(): string
    {
        $this->force = true;
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

        $this->objTemplate->labelInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_select'][0];
        $this->objTemplate->descInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_select'][1];
        $this->objTemplate->labelCreateInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_create_interface'][0];
        $this->objTemplate->descCreateInterface = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_create_interface'][1];

        $strInterfaceModal = '<a href="contao?do=interface&popup=1" onclick="Backend.openModalIframe({\'title\':\'%s\',\'url\':this.href});return false">%s</a>';
        $strInterfaceLink = sprintf($strInterfaceModal, $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_create'], $GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_create']);

        $this->objTemplate->noInterface = sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_not_found'], $strInterfaceLink);

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        if(Input::post('interface_id') !== 'demo')
        {
            $objInterface = $this->getInterface();

            $this->moduleLog(sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_log_interface_used'], $objInterface->title));

            return;
        }

        // Check if demo provider already exists
        $objProvider = ProviderModel::findByAnbieternr('DEMO');

        if(null === $objProvider)
        {
            $objProvider = new ProviderModel();

            $objProvider->tstamp = time();
            $objProvider->anbieternr = 'DEMO';
            $objProvider->forwardingMode = 'contact';
            $objProvider->firma = 'DEMO';
            $objProvider->published = 1;
            // ToDo: Default image

            $objProvider->save();

            $objContact = new ContactPersonModel();

            $objContact->pid = $objProvider->id;
            $objContact->tstamp = time();
            $objContact->anrede = 'herr';
            $objContact->vorname = 'Max';
            $objContact->name = 'Mustermann';
            $objContact->published = 1;
            // ToDo: Default image

            $objContact->save();

            $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_log_provider_created']);
        }
        else
        {
            $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_log_provider_exists']);
        }

        // Check if demo interface already exists
        $objInterface = InterfaceModel::findByTitle('DEMO');

        if(null === $objInterface)
        {
            // Create folder
            $strBase = 'files/';
            $dirDemo = new Folder($strBase . 'estatemanager');
            $dirDemo->unprotect();

            $dirImport   = new Folder($strBase . 'estatemanager/import');
            $dirData     = new Folder($strBase . 'estatemanager/data');
            $dirProvider = new Folder($strBase . 'estatemanager/provider');

            $objInterface = new InterfaceModel();

            $objInterface->title = 'DEMO';
            $objInterface->type = 'openimmo';
            $objInterface->uniqueProviderField = 'anbieternr';
            $objInterface->uniqueField = 'objektnrIntern';
            $objInterface->contactPersonUniqueField = 'email_zentrale';
            $objInterface->contactPersonActions = 'a:2:{i:0;s:6:"create";i:1;s:6:"update";}';
            $objInterface->autoSync = 0;
            $objInterface->deleteFilesOlderThen = 0;

            $objInterface->provider = $objProvider->id;

            $objInterface->importPath = $dirImport->getModel()->uuid;
            $objInterface->filesPath = $dirData->getModel()->uuid;
            $objInterface->filesPathContactPerson = $dirProvider->getModel()->uuid;

            $objInterface->save();

            $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_log_interface_created']);
        }
        else
        {
            $this->moduleLog($GLOBALS['TL_LANG']['tl_real_estate_configurator']['interface_log_interface_exists']);
        }
    }

    /**
     * @return bool
     */
    public function shouldRun(): bool
    {
        return true;
    }
}
