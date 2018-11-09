<?php

class Calendar_model extends CI_Model
{
    public function get_calendar()
    {
        $days_with_padding = array(
            26,
            27,
            28,
            29,
            30,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15,
            16,
            17,
            18,
            19,
            20,
            21,
            22,
            23,
            24,
            25,
            26,
            27,
            28,
            29,
            30,
            31,
            1,
            2,
            3,
            4,
            5,
            6
        );
        
        $i = 0;

        while ($days_with_padding[$i] != 1) {
            $days_with_padding[$i] = array("day" => $days_with_padding[$i], "disabled" => true);
            $i++;
        }

        $days_with_padding[$i] = array("day" => $days_with_padding[$i], "disabled" => false);
        $i++;

        while ($days_with_padding[$i] != 1) {
            $days_with_padding[$i] = array("day" => $days_with_padding[$i], "disabled" => false);
            $i++;
        }

        while ($i < count($days_with_padding)) {
            $days_with_padding[$i] = array("day" => $days_with_padding[$i], "disabled" => true);
            $i++;
        }
        
        $calendar = array();

        for ($i = 0; $i * 7 < count($days_with_padding); $i++) {
            $week = array();
            for ($j = 0; $j < 7; $j++) {
                // array_push($calendar, count($days_with_padding));
                array_push($week, $days_with_padding[($i * 7) + $j]);
            }
            array_push($calendar, $week);
        }
        
        return $calendar;
    }
}
