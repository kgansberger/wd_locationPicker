wd_locationPicker
=================

Backend-Widget für Contao mit dessen Hilfe Geokoordinaten über einen verschiebbaren Marker geetzt werden können.

= Einsatz =

 'latlng' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_tests']['latlng'],
            'exclude' => true,
            'inputType' => 'locationPicker',
            'default' => '37.4419, -122.1419',
            'eval' => array('maxlength' => 255)
        ),