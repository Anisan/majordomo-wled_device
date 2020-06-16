<?php

$presets = $this->getProperty("Presets");
$presets = json_decode($presets);
unset($presets[count($presets)-1]);
$this->setProperty("Presets", json_encode($presets));
