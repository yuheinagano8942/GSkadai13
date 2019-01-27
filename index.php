<?php

$animals = array("ネズミ", "ウシ", "トラ", "ウサギ", "タツ");
$str = "ウサギ";

foreach ($animals as $value) {
   if ($value === "ウサギ") {
     break;
   }
   echo $value;
}