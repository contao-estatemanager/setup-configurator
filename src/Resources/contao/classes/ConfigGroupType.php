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

use Contao\Input;

/**
 * Configurator module "group type".
 *
 * @author Daniele Sciannimanica <https://github.com/doishub>
 */
class ConfigGroupType extends Configurator implements \executable
{
    /**
     * Name
     * @var string
     */
    protected $configName = 'grouptype';

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'conf_group_type';

    /**
     * Compile Template
     * @return string
     */
    public function compile(): string
    {
        $groups = array();

        foreach ($GLOBALS['EM_IMPORT']['group_types'] as $key => $source)
        {
            $groups[$source] = $GLOBALS['TL_LANG']['tl_real_estate_configurator']['group_type_' . $key];
        }

        $this->objTemplate->groups = $groups;

        return parent::compile();
    }

    /**
     * Run configuration
     */
    public function run()
    {
        $groups = Input::post('group_type');

        if(null === $groups)
        {
            return;
        }

        $this->Database->execute("TRUNCATE TABLE tl_real_estate_group");
        $this->moduleLog(sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['grouptype_log_truncate'], 'tl_real_estate_group'));

        $this->Database->execute("TRUNCATE TABLE tl_real_estate_type");
        $this->moduleLog(sprintf($GLOBALS['TL_LANG']['tl_real_estate_configurator']['grouptype_log_truncate'], 'tl_real_estate_type'));

        foreach ($groups as $group)
        {
            $this->importFromSql($group);

            $this->moduleLog(sprintf(
                $GLOBALS['TL_LANG']['tl_real_estate_configurator']['grouptype_log_imported'],
                $GLOBALS['TL_LANG']['tl_real_estate_configurator']['group_type_' . array_search($group, $GLOBALS['EM_IMPORT']['group_types'])][0]
            ));
        }

    }
}
