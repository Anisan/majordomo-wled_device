<?php

$this->device_types['wled'] = array(
    'TITLE'=>'WLED',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SWLED',
    'DESCRIPTION'=>'WLED controller',
    'PROPERTIES'=>array( 
        'version'=>array('DESCRIPTION'=>'Firmware version','_CONFIG_TYPE'=>'readonly'),
        'brightness'=>array('DESCRIPTION'=>'Brightness (%)','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'effect'=>array('DESCRIPTION'=>'Effect','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'speed'=>array('DESCRIPTION'=>'Speed','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'intensity'=>array('DESCRIPTION'=>'Intensity','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'palette'=>array('DESCRIPTION'=>'Palette','_CONFIG_TYPE'=>'num','ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'color'=>array('DESCRIPTION'=>'Color','_CONFIG_TYPE'=>'rgb','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'color2'=>array('DESCRIPTION'=>'Color 2','_CONFIG_TYPE'=>'rgb','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'ip'=>array('DESCRIPTION'=>'IP','_CONFIG_TYPE'=>'text','DATA_KEY'=>1),
        'cycle_state'=>array('DESCRIPTION'=>'Cycle state', 'ONCHANGE'=>'cycleUpdated'),
        'cycle_mode'=>array('DESCRIPTION'=>'Cycle mode','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'1=Random effect,2=Random palette,3=Random effect and palette,4=Presets,5=Random preset'),
        'cycle_timeout'=>array('DESCRIPTION'=>'Cycle timeout (sec)','_CONFIG_TYPE'=>'num'),
        'preset'=>array('DESCRIPTION'=>'Current preset','ONCHANGE'=>'presetUpdated'),
        'mqtt_v'=>array('DESCRIPTION'=>'V (MQTT)','ONCHANGE'=>'stateUpdated'),
        'mqtt_api'=>array('DESCRIPTION'=>'Api (MQTT)'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'MQTT state updated event'), 
        'paramsUpdated'=>array('DESCRIPTION'=>'Params updated event'), 
        'colorUpdated'=>array('DESCRIPTION'=>'Color updated event'), 
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'getInfo'=>array('DESCRIPTION'=>"Get info",'_CONFIG_SHOW'=>1),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1), 
        'cycleSwitch'=>array('DESCRIPTION'=>'Switch cycle'),
        'cycleOn'=>array('DESCRIPTION'=>"Cycle ON",'_CONFIG_SHOW'=>1),
        'cycleOff'=>array('DESCRIPTION'=>"Cycle OFF",'_CONFIG_SHOW'=>1),
        'cycleUpdated'=>array('DESCRIPTION'=>'Cycle state updated event'), 
        'presetUpdated'=>array('DESCRIPTION'=>'Preset updated event'), 
        'addPreset'=>array('DESCRIPTION'=>"Add preset",'_CONFIG_SHOW'=>1),
        'delPreset'=>array('DESCRIPTION'=>"Delete last preset",'_CONFIG_SHOW'=>1),
        'cycleProc'=>array('DESCRIPTION'=>"Cycle processing"),
        'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1), 
    ),
);
