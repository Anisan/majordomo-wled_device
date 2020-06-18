<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;
if (strpos($params['SOURCE'], "xml") !== FALSE ) return;

$this->setProperty('mqtt_api', 'T='.$params['NEW_VALUE']);

$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
if ($params['NEW_VALUE'])
{
    if ($this->getProperty('cycle_state'))
    {
        if ($this->getProperty('cycle_state'))
        {
            clearTimeOut($cycle_timer_title);
            setTimeOut($cycle_timer_title,'cm("'.$ot.'.cycleProc");',1);
        }
    }
}
else
{
    clearTimeOut($cycle_timer_title);
}