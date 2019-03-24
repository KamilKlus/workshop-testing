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
    function getPartOfDate(): string
    {
        //použití funkce date
        if (date("H") < 12) {

            return "Dobré ráno";

        } elseif (date("H") > 11 && date("H") < 18) {

            return "Dobré odpoledne";

        } elseif (date("H") > 17) {

            return "Dobrý večer";

        }

    }
}