<?php

if ($this->getProperty('cycle_state')) {
 $this->callmethodSafe('cycleOff');
} else {
 $this->callmethodSafe('cycleOn');
}  
