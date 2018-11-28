<?php

$events = array(
    array(
        'start_date' =>  '16.11.18',
        'title' => 'IT-SECX 2018',
        'location' => 'St. Pölten',
        'url' => 'https://itsecx.fhstp.ac.at/'
    ),
    array(
        'start_date' =>  '16.05.18',
        'end_date' => '18.05.18',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/'
    ),
    array(
        'start_date' =>  '15.02.18',
        'title' => 'Technologieplauscherl LIV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/54/'
    ),
    array(
        'start_date' =>  '19.01.18',
        'title' => 'ScriptConf',
        'location' => 'Linz',
        'url' => 'https://scriptconf.org/'
    ),
    array(
        'start_date' =>  '27.12.17',
        'end_date' => '30.12.17',
        'title' => 'Chaos Communication Congress',
        'location' => 'Leipzig',
        'url' => 'https://events.ccc.de/2017/11/23/34c3-tuwat/'
    ),
    array(
        'start_date' =>  '18.11.17',
        'title' => 'BSidesVienna',
        'location' => 'Wien',
        'url' => 'https://bsidesvienna.at/'
    ),
    array(
        'start_date' =>  '30.10.17',
        'title' => 'Datenschutz-Grundverordnung-Convention',
        'location' => 'Wien',
        'url' => 'https://www.kt.at/30-oktober-2017-datenschutz-grundverordnung-convention-der-wko/'
    ),
    array(
        'start_date' =>  '22.07.17',
        'title' => 'Technologieplauscherl XLVIII',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/48/'
    ),
    array(
        'start_date' =>  '01.06.17',
        'title' => 'DevOne',
        'location' => 'Linz',
        'url' => 'https://devone.at/2017/'
    ),
    array(
        'start_date' =>  '11.05.17',
        'end_date' => '12.05.17',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/previous-events/'
    ),
    array(
        'start_date' =>  '23.03.17',
        'title' => 'Technologieplauscherl XLV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/45/'
    ),
    array(
        'start_date' =>  '01.03.17',
        'end_date' => '02.03.17',
        'title' => 'TopConf Linz',
        'location' => 'Linz',
        'url' => 'https://www.topconf.com/conference/linz-2017/'
    ),
    array(
        'start_date' =>  '27.01.17',
        'title' => 'ScriptConf',
        'location' => 'Linz',
        'url' => 'https://scriptconf.org/2017/'
    ),
    array(
        'start_date' =>  '13.11.16',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/previous-events/'
    ),
    array(
        'start_date' =>  '12.11.16',
        'title' => 'BSidesVienna',
        'location' => 'Wien',
        'url' => 'https://bsidesvienna.at/archive/2016/'
    ),
    array(
        'start_date' =>  '12.03.15',
        'title' => 'Technologieplauscherl XXV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/25/'
    ),
    array(
        'start_date' =>  '26.11.14',
        'title' => 'Technologieplauscherl XXIII',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/23/'
    ),
    array(
        'start_date' =>  '16.10.14',
        'title' => 'Technologieplauscherl XXII',
        'location' => 'Linz',
        'addinfo' => 'Speaker',
        'url' => 'https://technologieplauscherl.at/22/'
    ),
    array(
        'start_date' =>  '31.08.11',
        'end_date' => '06.09.11',
        'title' => 'Ars Electronica Festival',
        'location' => 'Linz',
        'addinfo' => 'Artist',
        'url' => 'https://ars.electronica.art/origin/de/'
    ),
    array(
        'start_date' =>  '02.09.10',
        'end_date' => '11.09.10',
        'title' => 'Ars Electronica Festival',
        'location' => 'Linz',
        'addinfo' => 'Artist',
        'url' => 'https://ars.electronica.art/repair/de/'
    ),
);

?><html>
	<head>
		<title>David Brunnthaler - Curriculum Vitae</title>
	</head>
	<body>
		<h1><small>Curriculum Vitae</small><br />David Brunnthaler</h1>

        <table>
        <?php
        foreach($events AS $event) {
            $start_date = DateTime::createFromFormat('d.m.y', $event['start_date']);
            if(isset($event['end_date'])) {
                $end_date = DateTime::createFromFormat('d.m.y', $event['end_date']);

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