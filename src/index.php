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
    <h2 class="mt-5">Events</h2>
        <?php
        $counter = 0;
        foreach($events AS $event) {
            $rowClasses = array('row', 'pt-1', 'pb-1', 'border-bottom');
            if($counter == 0) {
                $rowClasses[] = 'border-top';
            }
            echo '
                <div class="'.implode(' ', $rowClasses).'">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                        <small>'.formatDateRange($event['start_date'], (isset($event['end_date'])?$event['end_date']:NULL)).'</small>
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">
                        <a href="'.$event['url'].'" target="_blank">'.$event['title'].'</a>
                        '.(isset($event['addinfo'])?'<small>'.$event['addinfo'].'</small>':'').'
                    </div>
                    <div class="offset-2 col-10 offset-sm-0 col-sm-3 col-md-2 col-lg-5">
                        '.$event['location'].'
                    </div>
              </div>
                ';
            $counter ++;
        }
        ?>

    <h2 class="mt-5">Work</h2>
        <?php
        $counter = 0;
        foreach($works AS $work) {
            $rowClasses = array('row', 'pt-1', 'pb-1', 'border-bottom');
            if($counter == 0) {
                $rowClasses[] = 'border-top';
            }
            echo '
                <div class="'.implode(' ', $rowClasses).'">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                        <small>'.formatDateRange($work['start_date'], (isset($work['end_date'])?$work['end_date']:NULL)).'</small>
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">
                        '.(isset($work['url'])?'<a href="'.$work['url'].'" target="_blank">'.$work['title'].'</a>':$work['title']).'
                    </div>
                    <div class="offset-2 col-10 offset-sm-0 col-sm-3 col-md-2 col-lg-5">
                        '.(isset($work['addinfo'])?$work['addinfo']:'').'
                    </div>
                </div>
                ';
            $counter ++;
        }
        ?>

    <h2 class="mt-5">Education</h2>
        <?php
        $counter = 0;
        foreach($educations AS $education) {
            $rowClasses = array('row', 'pt-1', 'pb-1', 'border-bottom');
            if($counter == 0) {
                $rowClasses[] = 'border-top';
            }
            echo '
                <div class="'.implode(' ', $rowClasses).'">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    '.formatDateRange($education['start_date'], (isset($education['end_date'])?$education['end_date']:NULL)).'
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">
                        '.(isset($education['url'])?'<a href="'.$education['url'].'" target="_blank">'.$education['university'].' - '.(isset($education['study_course'])?$education['study_course']:'').'</a>':$education['university'].' - '.(isset($education['study_course'])?$education['study_course']:'')).(isset($education['degree'])?'<br />'.$education['degree']:'').'
                    </div>
                    <div class="offset-2 col-10 offset-sm-0 col-sm-3 col-md-2 col-lg-5">
                        '.(isset($education['location'])?$education['location']:'').'
                    </div>
                </div>
                ';
            $counter ++;
        }
        ?>

    <h2 class="mt-5">ECTS</h2>
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

    <h2 class="mt-5">Podcasts</h2>
    <ul class="podcasts row">
        <?php
        foreach($podcasts AS $podcast) {
            echo '<li class="col-12 col-sm-6 col-md-4 col-lg-3 pb-3"><div>'.
                wrapInExtLink('<img src="img/'.$podcast['img'].'" alt="'.$podcast['title'].'" title="'.$podcast['title'].'" /><div class="text">'.$podcast['title'].'</div>', (isset($podcast['url'])?$podcast['url']:NULL)).
                '</div></li>';
        }
        ?>
    </ul>
</div>
</body>
</html>