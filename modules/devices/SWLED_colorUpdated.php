<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if (strpos($params['SOURCE'], "xml") !== FALSE ) return;

$hex = str_replace('#', '', $params['NEW_VALUE']);
if ( $params['PROPERTY'] == "color")
    $this->setProperty('mqtt_api', 'CL=#'.$hex);
if ( $params['PROPERTY'] == "color2")
    $this->setProperty('mqtt_api', 'C2=#'.$hex);