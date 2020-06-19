<?php

$presets = $this->getProperty("presets");
$presets = json_decode($presets);
unset($presets[count($presets)-1]);
$this->setProperty("presets", json_encode($presets));
