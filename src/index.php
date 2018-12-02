<?php

include_once('./scripts/functions.php');
include_once('./scripts/data.php');

?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>David Brunnthaler - Curriculum Vitae</title>
    <link rel="stylesheet" type="text/css" href="css/styles.min.css" media="all">
</head>
<body>
<div class="bg-dark">
    <div class="container text-white">
        <h1><small>Curriculum Vitae</small><br />David Brunnthaler</h1>
    </div>
</div>
<div class="container">
    <h2>Events</h2>
        <?php
        foreach($events AS $event) {
            echo '
                <div class="row">
                    <div class="col-4">'.formatDateRange($event['start_date'], (isset($event['end_date'])?$event['end_date']:NULL)).'</div>
                    <div class="col-5"><a href="'.$event['url'].'" target="_blank">'.$event['title'].'</a></div>
                    <div class="col-1">'.$event['location'].'</div>
                    <div class="col-2">'.(isset($event['addinfo'])?$event['addinfo']:'').'</div>
                </div>
                ';
        }
        ?>

    <h2>Work</h2>
    <table>
        <?php
        foreach($works AS $work) {
            echo '
                <tr>
                    <td>'.formatDateRange($work['start_date'], (isset($work['end_date'])?$work['end_date']:NULL)).'</td>
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
                    <td>'.formatDateRange($education['start_date'], (isset($education['end_date'])?$education['end_date']:NULL)).'</td>
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
</div>
</body>
</html>