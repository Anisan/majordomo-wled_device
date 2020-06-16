<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

$state = simplexml_load_string($params['NEW_VALUE']);
$this->setProperty('brightness', round($state->ac*100/255));
if ($state->ac > 0)
    $this->setProperty('status', 1);
else
    $this->setProperty('status', 0);
$this->setProperty('color', sprintf("%02X%02X%02X",$state->cl[0],$state->cl[1],$state->cl[2]));
$this->setProperty('color2', sprintf("%02X%02X%02X",$state->cs[0],$state->cs[1],$state->cs[2]));
$this->setProperty('effect', $state->fx);
$effects = $this->getProperty('effects');
if ($effects)
{
    $effects = json_decode($effects);
    $this->setProperty('effect_name', $effects[intval($state->fx)]);
}
$this->setProperty('speed', $state->sx);
$this->setProperty('intensity', $state->ix);
$this->setProperty('palette', $state->fp);
$palettes = $this->getProperty('palettes');
if ($palettes)
{
    $palettes = json_decode($palettes);
    $this->setProperty('palette_name', $palettes[intval($state->fp)]);
}
$this->setProperty('alive', 1); 