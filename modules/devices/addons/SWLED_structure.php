<?php

$this->device_types['wled'] = array(
    'TITLE'=>'WLED',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SWLED',
    'DESCRIPTION'=>'WLED controller',
    'PROPERTIES'=>array( 
        'brightness'=>array('DESCRIPTION'=>'Brightness (%)','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'effect'=>array('DESCRIPTION'=>'Effect','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'speed'=>array('DESCRIPTION'=>'Speed','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'intensity'=>array('DESCRIPTION'=>'Intensity','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'palette'=>array('DESCRIPTION'=>'Palette','_CONFIG_TYPE'=>'num','ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'color'=>array('DESCRIPTION'=>'Color','_CONFIG_TYPE'=>'rgb','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'ip'=>array('DESCRIPTION'=>'IP','_CONFIG_TYPE'=>'text','DATA_KEY'=>1),
        'mqtt_v'=>array('DESCRIPTION'=>'V (MQTT)','ONCHANGE'=>'stateUpdated'),
        'mqtt_api'=>array('DESCRIPTION'=>'Api (MQTT)'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'MQTT state updated event'), 
        'paramsUpdated'=>array('DESCRIPTION'=>'Params updated event'), 
        'colorUpdated'=>array('DESCRIPTION'=>'Color updated event'), 
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1), 
        'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1), 
    ),
);
