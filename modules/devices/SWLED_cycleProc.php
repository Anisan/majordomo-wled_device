<?php

$this->setProperty("status",1);

$effect = 0;
$palette = 0;
//set random effect and palette
$effects = $this->getProperty('effects');
if ($effects)
{
    $effects = json_decode($effects);
    $effect = rand(0, count($effects));
}
$palettes = $this->getProperty('palettes');
if ($palettes)
{
    $palettes = json_decode($palettes);
    $palette = rand(0, count($palettes));
}
$this->setProperty('effect', $effect);
$this->setProperty('palette', $palette);

$timeout = $this->getProperty('cycle_timeout');
if (!$timeout)
    $timeout = 5;

$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',$timeout);
