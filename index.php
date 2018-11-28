<?php

include_once('data.php');

?><html>
	<head>
		<title>David Brunnthaler - Curriculum Vitae</title>
	</head>
	<body>
		<h1><small>Curriculum Vitae</small><br />David Brunnthaler</h1>

        <table>
        <?php
        foreach($events AS $event) {
            $start_date = new DateTime($event['start_date']);
            if(isset($event['end_date'])) {
                $end_date = new DateTime($event['end_date']);

                $dateOut = $start_date->format('d.m.').'-'.$end_date->format('d.m.Y');
            } else {
                $dateOut = $start_date->format('d.m.Y');
            }
            echo '
            <tr>
                <td style="text-align:right;">'.$dateOut.'</td>
                <td><a href="'.$event['url'].'" target="_blank">'.$event['title'].'</a></td>
                <td>'.$event['location'].'</td>
                <td>'.(isset($event['addinfo'])?$event['addinfo']:'').'</td>
            </tr>
            ';
        }
        ?>
        </table>
	</body>
</html>