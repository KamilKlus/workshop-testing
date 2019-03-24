<?php
include "src/DateFormatterTwo.php";

use DateFormatterTwo as df;
//výpis třídy dateFOrmatterTwo
$date = new df\DateFormatterTwo;
echo $date->getPartOfDate();