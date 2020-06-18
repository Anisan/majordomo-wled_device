<?php
if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;
    
$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';

if ($params['NEW_VALUE']) {
    $timeout = $this->getProperty('cycle_timeout');
    if (!$timeout)
        $timeout = 5;
    clearTimeOut($cycle_timer_title);
    setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',$timeout);
    $this->callMethodSafe('cycleProc');
}
else
{
    clearTimeOut($cycle_timer_title);
}
