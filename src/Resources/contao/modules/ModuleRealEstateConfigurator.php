<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager/core
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

namespace ContaoEstateManager\SetupConfigurator;

use Contao\BackendModule;
use Contao\Input;
use Contao\System;

/**
 * Back end module "real estate configurator".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ModuleRealEstateConfigurator extends BackendModule
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_estatemanager_configurator';

	/**
	 * Generate the module
	 *
	 * @throws \Exception
	 */
	protected function compile()
	{
		System::loadLanguageFile('tl_real_estate_configurator');

        $this->Template->description = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['description'];
        $this->Template->groupHint = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['group_hint'];
        $this->Template->submit = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['submit'];
        $this->Template->content = '';

        $blnActive = Input::post('FORM_SUBMIT') === 'tl_configurator';
        $this->Template->isActive = $blnActive;

        $oldGroup = '';

        foreach ($GLOBALS['EM_CONFIGURATOR'] as $strGroup => $callbacks)
        {
            if($strGroup != $oldGroup)
            {
                $this->Template->content .= '<h2>'.$GLOBALS['TL_LANG']['tl_real_estate_configurator']['group_' . $strGroup].'</h2>';
                $oldGroup = $strGroup;
            }

            foreach ($callbacks as $callback){
                $this->import($callback);

                if (!$this->$callback instanceof \executable)
                {
                    throw new \Exception("$callback is not an executable class");
                }

                if($blnActive && $this->$callback->shouldRun())
                {
                    $this->$callback->run();
                    $this->$callback->executed = true;
                }

                $buffer = $this->$callback->compile();

                if ($this->$callback->isActive())
                {
                    $this->Template->content = $buffer;
                    break;
                }

                $this->Template->content .= $buffer;
            }
        }
	}
}
