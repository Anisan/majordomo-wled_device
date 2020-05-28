<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

$state = simplexml_load_string($params['NEW_VALUE']);
$this->setProperty('brightness', $state->ac);
if ($state->ac > 0)
    $this->setProperty('status', 1);
else
    $this->setProperty('status', 0);
$this->setProperty('color', dechex($state->cl[0]).dechex($state->cl[1]).dechex($state->cl[2]));
$this->setProperty('effect', $state->fx);
$this->setProperty('speed', $state->sx);
$this->setProperty('intensity', $state->ix);
$this->setProperty('palette', $state->fp);

$this->setProperty('alive', 1); 