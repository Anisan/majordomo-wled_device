<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;
if (strpos($params['SOURCE'], "xml") !== FALSE ) return;

$this->setProperty('mqtt_api', 'T='.$params['NEW_VALUE']);

