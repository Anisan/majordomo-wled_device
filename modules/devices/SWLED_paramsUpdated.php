<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if (strpos($params['SOURCE'], "xml") !== FALSE ) return;

if ( $params['PROPERTY'] == "brightness")
{
    if ($params['NEW_VALUE']>100)
        $bri = 255;
    else
        $bri = round($params['NEW_VALUE']*255/100);
    $this->setProperty('mqtt_api', 'A='.$bri);
}
if ( $params['PROPERTY'] == "effect")
    $this->setProperty('mqtt_api', 'FX='.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "speed")
    $this->setProperty('mqtt_api', 'SX='.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "intensity")
    $this->setProperty('mqtt_api', 'IX='.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "palette")
    $this->setProperty('mqtt_api', 'FP='.$params['NEW_VALUE']);
