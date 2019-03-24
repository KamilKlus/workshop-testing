<?php
/**
 * Created by PhpStorm.
 * User: kklus
 * Date: 24.03.2019
 * Time: 20:34
 */

namespace DateFormatterTwo;


class DateFormatterTwo
{
    function getPartOfDate(): string{

        if(date("H") < 12){

            return "good morning";

        }elseif(date("H") > 11 && date("H") < 18){

            return "good afternoon";

        }elseif(date("H") > 17){

            return "good evening";

        }

    }
}