<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

if(ContaoEstateManager\GoogleMaps\AddonManager::valid()) {
    // Add field
    // ToDo: Rename field in googlemaps bundle
    $GLOBALS['TL_DCA']['tl_real_estate_config']['fields']['googleApiToken'] = array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_real_estate_config']['googleApiToken'],
        'inputType'               => 'text',
        'eval'                    => array('tl_class'=>'w50')
    );

    // ToDo: Rename legend in googlemaps bundle
    // Extend default palette
    Contao\CoreBundle\DataContainer\PaletteManipulator::create()
        ->addLegend('google_legend', 'filter_config_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
        ->addField(array('googleApiToken'), 'google_maps_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
        ->applyToPalette('default', 'tl_real_estate_config')
    ;
}
