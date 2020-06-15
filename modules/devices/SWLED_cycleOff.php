<?php
$ot = $this->object_title;
$cycle_timer_title = $ot.'_cycle';
clearTimeOut($cycle_timer_title);
$this->setProperty("status",0);
