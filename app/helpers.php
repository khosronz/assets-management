<?php

if (!function_exists('persianToGregorianDate')) {
    function persianToGregorianDate($date)
    {
        $date = explode("-", $date);
        $day = $date[2];
        $month = $date[1];
        $year = $date[0];
        $date = \Morilog\Jalali\CalendarUtils::toGregorian($year, $month, $day);
        $date = $date[0] . '-' . $date[1] . '-' . $date[2];
        return $date;
    }
}
