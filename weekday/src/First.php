<?php
    class WeekdayCalculator
    {
        function findWeekday ($user_input) {

            date_default_timezone_set('UTC');
            $date = new DateTime($user_input);

            $weekday = $date->format('w');
            var_dump($weekday);
            return $weekday;
        }
    }
?>
