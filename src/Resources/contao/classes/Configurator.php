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

abstract class Configurator extends Backend
{
    /**
     * Config name
     * @var string
     */
    protected $configName;

    /**
     * Template
     * @var BackendTemplate
     */
    protected $objTemplate;

    /**
     * Template
     * @var string
     */
    protected $strTemplate;

    /**
     * Run method was executed
     * @var bool
     */
    public $executed = false;

    /**
     * Configurator constructor
     */
    public function __construct()
    {
        $this->objTemplate = new BackendTemplate($this->strTemplate);
        $this->objTemplate->configName = $this->configName;
        $this->objTemplate->hl = 'h3';
        $this->objTemplate->headline = $GLOBALS['TL_LANG']['tl_real_estate_configurator'][ $this->configName ];

        parent::__construct();
    }

    /**
     * @return bool
     */
    public function shouldRun()
    {
        return !!Input::post($this->configName);
    }

    /**
     * Compile
     * @return string
     */
    public function compile()
    {
        $this->objTemplate->executed = $this->executed;
        return $this->objTemplate->parse();
    }
}