<?php

include_once('./scripts/Utils.php');
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
        <li><a href="/#work">Zur Arbeit</a></li>
        <li><a href="/#skills">Zu den Kompetenzen</a></li>
        <li><a href="/#education">Zur Ausbildung</a></li>
        <li><a href="/#events">Zu den Veranstaltungen</a></li>
        <li><a href="/#privateEducation">Zur digitalen Fortbildung</a></li>
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
    <section id="work">
        <h2 class="mt-5">Arbeit</h2>
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
                        <small>'.Utils::formatDateRange($work['start_date'], (isset($work['end_date'])?$work['end_date']:NULL)).'</small>
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-8 col-md-9 col-lg-10">
                        '.Utils::wrapInExtLink($work['title'], (isset($work['url'])?$work['url']:NULL)).'
                        '.(isset($work['addinfo'])?'<ul class="mb-0"><li>'.implode('</li><li>', $work['addinfo']).'</li></ul>':'').'
                    </div>
                </div>
                ';
            $counter ++;
        }
        ?>
    </section>

    <section id="skills">
        <h2 class="mt-5">Kompetenzen</h2>
        <?php
        $counter = 0;
        foreach($skills AS $skillGroupKey => $skillGroupValue) {
            $rowClasses = array('row', 'pt-1', 'pb-1', 'border-bottom');
            if($counter == 0) {
                $rowClasses[] = 'border-top';
            }
            echo '
                <div class="'.implode(' ', $rowClasses).'">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                        <small>'.$skillGroupKey.'</small>
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-8 col-md-9 col-lg-10">
                        '.implode(', ', $skillGroupValue).'
                    </div>
                </div>
                ';
            $counter ++;
        }
        ?>
    </section>

    <section id="education">
        <h2 class="mt-5">Ausbildung</h2>
        <?php
        $counter = 0;
        foreach($educations AS $education) {
            $lc_studyCourse = strtolower(str_replace(' ', '_', $education['study_course']));
            echo '
                    <div class="row pt-1 border-top">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            '.Utils::formatDateRange($education['start_date'], (isset($education['end_date'])?$education['end_date']:NULL)).'
                        </div>
                        <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">'.
                            Utils::wrapInExtLink($education['university'].' - '.$education['study_course'], (isset($education['url'])?$education['url']:NULL)).
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

            echo '<div class="row container_ects"><div class="col-12 border-top">
                <h3 class="sr-only">ECTS-Punkte '.$education['study_course'].'</h3>';
            $counterEctsOuter = 0;
            foreach($education['ects'] AS $courseGroup) {
                echo '<h4 class="mt-3 offset-1 offset-md-2 offset-lg-1">'.$courseGroup['title'].'</h4>';
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

    <section id="events">
        <h2 class="mt-5">Veranstaltungen</h2>
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
                        <small>'.Utils::formatDateRange($event['start_date'], (isset($event['end_date'])?$event['end_date']:NULL)).'</small>
                    </div>
                    <div class="offset-1 col-11 offset-sm-0 col-sm-5 col-md-7 col-lg-5">
                        '.Utils::wrapInExtLink($event['title'], (isset($event['url'])?$event['url']:NULL)).'
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

    <section id="privateEducation">
        <h2 class="mt-5">Digitale Fortbildung</h2>
        <ul class="privateEducations row m-0 p-0">
            <?php
            foreach($privateEducations AS $privateEducation) {
                $altTag = $privateEducation['title'].' '.$privateEducation['type'].' Cover Bild';
                echo '<li class="col-6 col-sm-4 col-md-3 col-lg-2 pb-3"><div>'.
                    Utils::wrapInExtLink('<img src="/img/'.$privateEducation['img'].'" alt="'.$altTag.'" title="'.$altTag.'" /><div class="text">'.$privateEducation['title'].' <small>'.$privateEducation['type'].'</small></div>', (isset($privateEducation['url'])?$privateEducation['url']:NULL)).
                    '</div></li>';
            }
            ?>
        </ul>
    </section>
</main>

<footer id="container_footer" class="bg-dark mt-5">
    <div class="container text-white pt-4 pb-4">
        <div class="row">
            <div class="col-12 col-sm-6">
                <strong>David Brunnthaler</strong><br />
                <a href="mailto:david@screencode.at" class="text-white">david@screencode.at</a><br />
                <a href="tel:+436649113740" class="text-white">+43 664 911 37 40</a>
            </div>
            <div class="col-12 col-sm-6 mt-3 m-sm-0 d-flex justify-content-end align-items-center">
                <ul class="d-flex m-0 p-0">
                    <li><a href="mailto:david@screencode.at" class="text-white">E-Mail</a></li>
                    <li><?php echo Utils::wrapInExtLink('Twitter', 'https://twitter.com/david_bru', 'text-white'); ?></li>
                    <li><?php echo Utils::wrapInExtLink('GitHub', 'https://github.com/davidbru', 'text-white'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>