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

$timeout = $this->getProperty('cycle_timeout');
if (!$timeout)
    $timeout = 5;
$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',$timeout);
