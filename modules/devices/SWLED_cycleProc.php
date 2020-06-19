<?php

$this->setProperty("status",1);

$effect = 0;
$palette = 0;
$mode = $this->getProperty('cycle_mode');
//set random effect
if ($mode == 1 || $mode==3)
{
    $effects = $this->getProperty('effects');
    if ($effects)
    {
        $effects = json_decode($effects);
        $effect = rand(0, count($effects)-1);
    }
    $this->setProperty('effect', $effect);
}
//set random palette
if ($mode == 2 || $mode==3)
{
    $palettes = $this->getProperty('palettes');
    if ($palettes)
    {
        $palettes = json_decode($palettes);
        $palette = rand(0, count($palettes)-1);
    }
    $this->setProperty('palette', $palette);
}
//set preset
if ($mode == 4)
{
    $presets = $this->getProperty("presets");
    $presets = json_decode($presets);
    if (count($presets)!=0)
    {
        $cur_preset = $this->getProperty('preset');
        $preset = $presets[$cur_preset];
        $cur_preset = $cur_preset + 1;
        if ($cur_preset >= count($presets))
            $cur_preset = 0;
        $this->setProperty('preset',$cur_preset);
    }
}
if ($mode == 5)
{
    $presets = $this->getProperty("presets");
    $presets = json_decode($presets);
    if (count($presets)!=0)
    {
        $cur_preset = rand(0, count($presets)-1);
        $this->setProperty('preset',$cur_preset);
    }
}

$timeout = $this->getProperty('cycle_timeout');
if (!$timeout)
    $timeout = 5;
$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',$timeout);
