<?php
include "src/DateFormartterTwo.php";
use DateFormatterTwo as df;

$date = new df\DateFormatterTwo;
echo $date->getPartOfDate();