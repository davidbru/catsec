<?php
    function formatDateRange($start_date, $end_date = NULL) {
        $start_date = new DateTime($start_date);

        if($end_date === 'ongoing') {
            $dateOut = $start_date->format('Y').'–'.$end_date;
        } elseif(!is_null($end_date)) {
            $end_date = new DateTime($end_date);

            if($start_date->format('Y') !== $end_date->format('Y')) {
                $dateOut = $start_date->format('Y').'–'.$end_date->format('Y');
            } elseif($start_date->format('n') === $end_date->format('n')) {
                $dateOut = $start_date->format('d.').'–'.$end_date->format('d. F Y');
            } else {
                $dateOut = $start_date->format('d. F').'–'.$end_date->format('d. F Y');
            }
        } else {
            $dateOut = $start_date->format('d. F Y');
        }
        return $dateOut;
    }


    function cmpTitleAsc($a, $b) {
        return strcmp($a['title'], $b['title']);
    }
