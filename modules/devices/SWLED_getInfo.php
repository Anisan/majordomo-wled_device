<?php

//get information
$url = 'http://'. $this->getProperty("ip")."/json";
$content = getUrl($url);
$json = json_decode($content, true);
$this->setProperty("effects", json_encode($json["effects"]));
$this->setProperty("palettes", json_encode($json["palettes"]));
$this->setProperty("version", $json["info"]["ver"]);
