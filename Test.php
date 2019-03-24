<?php
include "src/DateFormatterTwo.php";
use DateFormatterTwo as df;

$date = new df\DateFormatterTwo;
echo $date->getPartOfDate();