<?php

$timeout = $this->getProperty('cycle_timeout');
if (!$timeout)
    $timeout = 5;

$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
clearTimeOut($cycle_timer_title);
setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',$timeout);

$this->callMethodSafe('cycleProc');

