<?php

include_once('./scripts/functions.php');
include_once('./scripts/data.php');

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

<h2>Education</h2>
<table>
    <?php
    foreach($educations AS $education) {
        echo '
            <tr>
                <td style="text-align:right;">'.formatDateRange($education['start_date'], (isset($education['end_date'])?$education['end_date']:NULL)).'</td>
                <td>'.(isset($education['url'])?'<a href="'.$education['url'].'" target="_blank">'.$education['university'].'</a>':$education['university']).'</td>
                <td>'.(isset($education['location'])?$education['location']:'').'</td>
                <td>'.(isset($education['study_course'])?$education['study_course']:'').'</td>
                <td>'.(isset($education['degree'])?$education['degree']:'').'</td>
            </tr>
            ';
    }
    ?>
</table>

<h2>ECTS</h2>
<?php
foreach($courseData AS $university => $coursesGroups) {
    echo '
                    <h3>'.$university.'</h3>
                    <table>
                ';
    foreach($coursesGroups AS $courseGroup) {
        echo '
                        <tr><td colspan="2"><h4>'.$courseGroup['title'].'</h4></td></tr>
                    ';
        foreach($courseGroup['courses'] AS $course) {
            echo '
                            <tr>
                                <td>'.$course['points'].'</td>
                                <td>'.$course['title'].'</td>
                            </tr>
                        ';
        }
    }
    echo '
                    </table>
                ';
}
?>

<h2>Podcasts</h2>
<ul>
    <?php
    foreach($podcasts AS $podcast) {
        echo '
                        <li>'.(isset($podcast['url'])?'<a href="'.$podcast['url'].'" target="_blank">'.$podcast['title'].'</a>':$podcast['title']).'</li>
                    ';
    }
    ?>
</ul>
</body>
</html>