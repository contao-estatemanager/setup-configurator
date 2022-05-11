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

use Contao\Backend;
use Contao\BackendTemplate;
use Contao\Input;
use Contao\System;
use ContaoEstateManager\InterfaceModel;

abstract class Configurator extends Backend
{
    /**
     * Message flag: success
     * @var string
     */
    const EM_SUCCESS = 'success';

    /**
     * Message flag: error
     * @var string
     */
    const EM_ERROR = 'error';

    /**
     * Config name
     * @var string
     */
    protected $configName;

    /**
     * Template
     * @var BackendTemplate
     */
    protected BackendTemplate $objTemplate;

    /**
     * Template
     * @var string
     */
    protected $strTemplate;

    /**
     * Run method was executed
     * @var bool
     */
    public bool $executed = false;

    /**
     * Force module
     * @var bool
     */
    public bool $force = false;

    /**
     * Messages
     * @var array
     */
    public array $messages = array();

    /**
     * Configurator constructor
     */
    public function __construct()
    {
        $this->objTemplate = new BackendTemplate($this->strTemplate);
        $this->objTemplate->configName = $this->configName;
        $this->objTemplate->hl = 'h3';
        $this->objTemplate->headline = $GLOBALS['TL_LANG']['tl_real_estate_configurator'][ $this->configName ];

        $this->messages[$this->configName] = array();

        parent::__construct();
    }

    /**
     * Checking the processing of a module
     */
    public function shouldRun(): bool
    {
        return !!Input::post($this->configName);
    }

    /**
     * Compile
     */
    public function compile(): string
    {
        $this->objTemplate->messages = $this->getModuleLog();
        $this->objTemplate->force = $this->force;
        $this->objTemplate->executed = $this->executed;
        return $this->objTemplate->parse();
    }

    /**
     * Is module active
     * @return false
     */
    public function isActive(): bool
    {
        return false;
    }

    /**
     * Add a message
     *
     * @param $strContent
     * @param string $type
     */
    public function moduleLog($strContent, string $type = self::EM_SUCCESS)
    {
        $this->messages[$this->configName][] = [$strContent, $type];
    }

    /**
     * Return all module messages
     */
    public function getModuleLog(): string
    {
        $objTemplate = new BackendTemplate('conf_messages');
        $objTemplate->logs = $this->messages[$this->configName];
        return $objTemplate->parse();
    }

    /**
     * Return the current interface model
     */
    public function getInterface()
    {
        if(Input::post('interface_id') && is_numeric(Input::post('interface_id')))
        {
            return InterfaceModel::findById(Input::post('interface_id'));
        }
        elseif(Input::post('interface_id')  === 'demo')
        {
            return InterfaceModel::findByTitle('DEMO');
        }

        return null;
    }

    /**
     * Import from sql file
     */
    public function importFromSql(string $strDump, array $arrSearch = null, array $arrReplace = null)
    {
        $file = System::getContainer()->getParameter('contao.web_dir') . '/bundles/estatemanagersetupconfigurator/import/' . $strDump;
        $data = @file($file);

        if($data)
        {
            foreach ($data as $line)
            {
                if($query = preg_replace( "/\r|\n/", "", $line))
                {
                    if($arrSearch && $arrReplace)
                    {
                        $query = str_replace($arrSearch, $arrReplace, $query);
                    }

                    try{
                        $this->Database->query($query);
                    }catch(\Exception $e){
                        $this->moduleLog($e, self::EM_ERROR);
                    }
                }
            }
        }
    }
}
