<?php
class Utils {
    public static function formatDateRange($start_date, $end_date = NULL) {
        $start_date = new DateTime($start_date);

        if ($end_date === 'ongoing') {
            $dateOut = 'seit '.$start_date->format('Y');
        } elseif (!is_null($end_date)) {
            $end_date = new DateTime($end_date);

            if ($start_date->format('Y') !== $end_date->format('Y')) {
                $dateOut = $start_date->format('Y') . '–' . $end_date->format('Y');
            } elseif ($start_date->format('n') === $end_date->format('n')) {
                $dateOut = $start_date->format('d.') . '–' . $end_date->format('d.m.Y');
            } else {
                $dateOut = $start_date->format('d.m.') . '–' . $end_date->format('d.m.Y');
            }
        } else {
            $dateOut = $start_date->format('d.m.Y');
        }
        return $dateOut;
    }


    public static function cmpTitleAsc($a, $b) {
        return strcmp($a['title'], $b['title']);
    }


    public static function wrapInExtLink($content, $link = NULL, $linkClass=NULL) {
        $html = $content;
        if(isset($link)) {
            $linkClassOut = '';
            if(isset($linkClass)) {
                $linkClassOut = ' class="'.$linkClass.'"';
            }
            $html = '<a href="' . $link . '" target="_blank"'.$linkClassOut.' rel="noreferrer">' . $content . '</a>';
        }
        return $html;
    }
}