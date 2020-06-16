<?php

$preset = $this->getProperty('brightness');
$preset .= ",".$this->getProperty('effect');
$preset .= ",".$this->getProperty('speed');
$preset .= ",".$this->getProperty('intensity');
$preset .= ",".$this->getProperty('palette');
$preset .= ",".$this->getProperty('color');
$preset .= ",".$this->getProperty('color2');

$presets = $this->getProperty("Presets");
$presets = json_decode($presets);
$presets[] = $preset;

$this->setProperty("Presets", json_encode($presets));
