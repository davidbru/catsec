<?php

include_once('data.php');

function formatDateRange($start_date, $end_date = NULL) {
    $start_date = new DateTime($start_date);

    if($end_date === 'ongoing') {
        $dateOut = $start_date->format('d. F Y').'–'.$end_date;
    } elseif(!is_null($end_date)) {
        $end_date = new DateTime($end_date);

        if($start_date->format('n') === $end_date->format('n')) {
            $dateOut = $start_date->format('d.').'–'.$end_date->format('d. F Y');
        } else {
            $dateOut = $start_date->format('d. F').'–'.$end_date->format('d. F Y');
        }
    } else {
        $dateOut = $start_date->format('d. F Y');
    }
    return $dateOut;
}

?><html>
	<head>
		<title>David Brunnthaler - Curriculum Vitae</title>
	</head>
	<body>
		<h1><small>Curriculum Vitae</small><br />David Brunnthaler</h1>

        <h2>Events</h2>
        <table>
            <?php
            foreach($events AS $event) {
                echo '
            <tr>
                <td style="text-align:right;">'.formatDateRange($event['start_date'], (isset($event['end_date'])?$event['end_date']:NULL)).'</td>
                <td><a href="'.$event['url'].'" target="_blank">'.$event['title'].'</a></td>
                <td>'.$event['location'].'</td>
                <td>'.(isset($event['addinfo'])?$event['addinfo']:'').'</td>
            </tr>
            ';
            }
            ?>
        </table>

        <h2>Work</h2>
        <table>
            <?php
            foreach($works AS $work) {
                echo '
            <tr>
                <td style="text-align:right;">'.formatDateRange($work['start_date'], (isset($work['end_date'])?$work['end_date']:NULL)).'</td>
                <td>'.(isset($work['url'])?'<a href="'.$work['url'].'" target="_blank">'.$work['title'].'</a>':$work['title']).'</td>
                <td>'.(isset($work['addinfo'])?$work['addinfo']:'').'</td>
            </tr>
            ';
            }
            ?>
        </table>
	</body>
</html>