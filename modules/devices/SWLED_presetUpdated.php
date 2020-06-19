<?php

    $presets = $this->getProperty("presets");
    $presets = json_decode($presets);
    if (count($presets)==0) return;
    $cur_preset = $params['NEW_VALUE'];
    if (count($presets)<=$cur_preset) return;
    $preset = $presets[$cur_preset];
    $preset = explode(",",$preset);
    $this->setProperty('brightness',$preset[0]);
    $this->setProperty('effect',$preset[1]);
    $this->setProperty('speed',$preset[2]);
    $this->setProperty('intensity',$preset[3]);
    $this->setProperty('palette',$preset[4]);
    $this->setProperty('color',$preset[5]);
    $this->setProperty('color2',$preset[6]);
