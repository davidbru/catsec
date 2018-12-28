<?php

include_once('./scripts/functions.php');
include_once('./scripts/data.php');

?><!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Lebenslauf von David Brunnthaler">
    <title>David Brunnthaler - Curriculum Vitae</title>
    <link rel="stylesheet" type="text/css" href="css/styles.min.css" media="all">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <script defer src="/js/scripts.min.js"></script>
</head>
<body>
<nav>
    <ul id="skiplinks" class="sr-only">
        <li><a href="/#events">Zu den Veranstaltungen</a></li>
        <li><a href="/#work">Zur Arbeit</a></li>
        <li><a href="/#education">Zur Ausbildung</a></li>
        <li><a href="/#podcasts">Zu den Podcasts</a></li>
    </ul>
</nav>

<header id="container_header" class="bg-dark">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 col-sm-2 d-flex flex-wrap align-items-center mt-3 mt-sm-0">
                <img src="/img/logo_db.svg" alt="Logo David Brunnthaler" title="Logo David Brunnthaler" />
            </div>
            <div class="col-12 col-sm-10">
                <h1><small>Curriculum Vitae</small><br />David Brunnthaler</h1>
            </div>
        </div>
    </div>
</header>
<main class="container">
    <section>
        <h2 class="mt-5" id="events">Veranstaltungen</h2>
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
                        '.wrapInExtLink($event['title'], (isset($event['url'])?$event['url']:NULL)).'
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
    </section>

    <section>
        <h2 class="mt-5" id="work">Arbeit</h2>
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
                        '.wrapInExtLink($work['title'], (isset($work['url'])?$work['url']:NULL)).'
                    </div>
                    <div class="offset-2 col-10 offset-sm-0 col-sm-3 col-md-2 col-lg-5">
                        '.(isset($work['addinfo'])?$work['addinfo']:'').'
                    </div>
                </div>
                ';
            $counter ++;
        }
        ?>
    </section>

    <section>
        <h2 class="mt-5" id="education">Ausbildung</h2>
        <?php
        $counter = 0;
        foreach($educations AS $education) {
            $lc_studyCourse = strtolower(str_replace(' ', '_', $education['study_course']));
            echo '
                    <div class="row pt-1 border-top">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            '.formatDateRange($education['start_date'], (isset($education['end_date'])?$education['end_date']:NULL)).'
                        </div>
                        <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">'.
                            wrapInExtLink($education['university'].' - '.$education['study_course'], (isset($education['url'])?$education['url']:NULL)).
                            (isset($education['degree'])?'<br />'.$education['degree']:'').'
                        </div>
                        <div class="offset-2 col-10 offset-sm-0 col-sm-3 col-md-2 col-lg-5">
                            '.(isset($education['location'])?$education['location']:'').'
                        </div>
                    </div>
                    <div class="row pb-1">
                        <div class="col-12 text-right"><a href="javascript:void(0)" class="ectsClickTarget">Zeige ECTS-Punkte</a></div>
                    </div>
                    ';

            echo '<div class="row container_ects"><div class="col-12 border-top">';
            $counterEctsOuter = 0;
            foreach($education['ects'] AS $courseGroup) {
                echo '<h3 class="mt-3 offset-1 offset-md-2 offset-lg-1">'.$courseGroup['title'].'</h3>';
                $counterEctsInner = 0;
                foreach($courseGroup['courses'] AS $course) {
                    $rowClasses = array('row', 'pt-1', 'pb-1', 'border-bottom', 'offset-1', 'offset-md-2', 'offset-lg-1');
                    if($counterEctsInner == 0) {
                        $rowClasses[] = 'border-top';
                    }
                    if($counterEctsOuter === (sizeof($education['ects'])-1) && $counterEctsInner === (sizeof($courseGroup['courses'])-1)) {
                        $rowClasses[] = 'mb-5';
                    }
                    echo '
                        <div class="'.implode(' ', $rowClasses).'">
                            <div class="col-1">'.$course['points'].'</div>
                            <div class="col-11">'.$course['title'].'</div>
                        </div>
                    ';
                    $counterEctsInner ++;
                }
                $counterEctsOuter ++;
            }

            echo '</div></div>';

            if($counter !== 0) {
                echo '<div class="row border-bottom"></div>';
            }

            $counter ++;
        }
        ?>
    </section>

    <section>
        <h2 class="mt-5" id="podcasts">Podcasts</h2>
        <ul class="podcasts row m-0 p-0">
            <?php
            foreach($podcasts AS $podcast) {
                echo '<li class="col-12 col-sm-6 col-md-4 col-lg-3 pb-3"><div>'.
                    wrapInExtLink('<img src="/img/'.$podcast['img'].'" alt="'.$podcast['title'].' Podcast Cover Bild" title="'.$podcast['title'].' Podcast Cover Bild" /><div class="text">'.$podcast['title'].'</div>', (isset($podcast['url'])?$podcast['url']:NULL)).
                    '</div></li>';
            }
            ?>
        </ul>
    </section>
</main>
</body>
</html>