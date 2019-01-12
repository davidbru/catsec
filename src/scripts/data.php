<?php

$events = array(
    20181116 => array(
        'start_date' => '2018-11-16',
        'title' => 'IT-SECX 2018',
        'location' => 'St. Pölten',
        'url' => 'https://itsecx.fhstp.ac.at/'
    ),
    20180516 => array(
        'start_date' => '2018-05-16',
        'end_date' => '2018-05-18',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/'
    ),
    20180215 => array(
        'start_date' => '2018-02-15',
        'title' => 'Technologieplauscherl LIV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/54/'
    ),
    20180119 => array(
        'start_date' => '2018-01-19',
        'title' => 'ScriptConf',
        'location' => 'Linz',
        'url' => 'https://scriptconf.org/'
    ),
    20171227 => array(
        'start_date' => '2017-12-27',
        'end_date' => '2017-12-30',
        'title' => 'Chaos Communication Congress',
        'location' => 'Leipzig',
        'url' => 'https://events.ccc.de/2017/11/23/34c3-tuwat/'
    ),
    20171118 => array(
        'start_date' => '2017-11-18',
        'title' => 'BSidesVienna',
        'location' => 'Wien',
        'url' => 'https://bsidesvienna.at/'
    ),
    20171030 => array(
        'start_date' => '2017-10-30',
        'title' => 'Datenschutz-Grundverordnung-Convention',
        'location' => 'Wien',
        'url' => 'https://www.kt.at/30-oktober-2017-datenschutz-grundverordnung-convention-der-wko/'
    ),
    20170722 => array(
        'start_date' => '2017-07-22',
        'title' => 'Technologieplauscherl XLVIII',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/48/'
    ),
    20170601 => array(
        'start_date' => '2017-06-01',
        'title' => 'DevOne',
        'location' => 'Linz',
        'url' => 'https://devone.at/2017/'
    ),
    20170511 => array(
        'start_date' => '2017-05-11',
        'end_date' => '2017-05-12',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/previous-events/'
    ),
    20170323 => array(
        'start_date' => '2017-03-23',
        'title' => 'Technologieplauscherl XLV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/45/'
    ),
    20170301 => array(
        'start_date' => '2017-03-01',
        'end_date' => '2017-03-02',
        'title' => 'TopConf Linz',
        'location' => 'Linz',
        'url' => 'https://www.topconf.com/conference/linz-2017/'
    ),
    20170127 => array(
        'start_date' => '2017-01-27',
        'title' => 'ScriptConf',
        'location' => 'Linz',
        'url' => 'https://scriptconf.org/2017/'
    ),
    20161113 => array(
        'start_date' => '2016-11-13',
        'title' => 'WeAreDevelopers',
        'location' => 'Wien',
        'url' => 'https://www.wearedevelopers.com/previous-events/'
    ),
    20161112 => array(
        'start_date' => '2016-11-12',
        'title' => 'BSidesVienna',
        'location' => 'Wien',
        'url' => 'https://bsidesvienna.at/archive/2016/'
    ),
    20150312 => array(
        'start_date' => '2015-03-12',
        'title' => 'Technologieplauscherl XXV',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/25/'
    ),
    20141126 => array(
        'start_date' => '2014-11-26',
        'title' => 'Technologieplauscherl XXIII',
        'location' => 'Linz',
        'url' => 'https://technologieplauscherl.at/23/'
    ),
    20141016 => array(
        'start_date' => '2014-10-16',
        'title' => 'Technologieplauscherl XXII',
        'location' => 'Linz',
        'addinfo' => 'Speaker',
        'url' => 'https://technologieplauscherl.at/22/'
    ),
    20110831 => array(
        'start_date' => '2011-08-31',
        'end_date' => '2011-09-06',
        'title' => 'Ars Electronica Festival',
        'location' => 'Linz',
        'addinfo' => 'Artist',
        'url' => 'https://ars.electronica.art/origin/de/'
    ),
    20100902 => array(
        'start_date' => '2010-09-02',
        'end_date' => '2010-09-11',
        'title' => 'Ars Electronica Festival',
        'location' => 'Linz',
        'addinfo' => 'Artist',
        'url' => 'https://ars.electronica.art/repair/de/'
    ),
);
krsort($events);


$works = array(
    20120401 => array(
        'start_date' => '2012-04-01',
        'end_date' => 'ongoing',
        'title' => 'screencode GmbH',
        'url' => 'https://www.screencode.at',
        'addinfo' => array(
            'Geschäftsführer, Teilhaber und Webentwickler',
            'Erstellung individueller Webseiten und Apps',
            'Kunden: Kleine und mittlere Unternehmen
            <ul>
            <li>'.Utils::wrapInExtLink('Fronius', 'https://www.fronius.com/').'</li>
            <li>'.Utils::wrapInExtLink('Miba', 'https://www.miba.com/').'</li>
            <li>'.Utils::wrapInExtLink('amedes', 'https://www.amedes-group.com/').'</li>
            <li>'.Utils::wrapInExtLink('ALK-Abelló', 'https://www.alk.net/at/').'</li>
            <li>'.Utils::wrapInExtLink('Medizinische Universität Wien', 'https://www.pollenwarndienst.at/').'</li>
            </ul>',
            'Technologien: 
                <ul>
                <li>PHP <small>5.6+</small></li>
                <li>JavaScript</li>
                <li>TYPO3 <small>4.5+</small></li>
                <li>Wordpress <small>4+</small></li>
                <li>Drupal <small>7+</small></li>
                <li>Node.js</li>
                <li>Vue.js <small>2.x</small></li>
                <li>Gulp</li>
                </ul>'
        )
    ),
    20050101 => array(
        'start_date' => '2005-01-01',
        'end_date' => '20120331',
        'title' => 'Selbstständiger Web Entwickler',
        'addinfo' => array(
            'Erstellung individueller Webseiten',
            'Kunden: Kleine Unternehmen',
            'Technologien: 
                <ul>
                <li>PHP <small>5.6+</small></li>
                <li>JavaScript</li>
                <li>TYPO3 <small>4.5+</small></li>
                </ul>'
        )
    ),
);
krsort($works);


$skills = array(
    'Programmier- & Skriptsprachen' => array(
        'PHP', 'JavaScript', 'Python', 'Cordova', 'Shell'
    ),
    'Datenbanken' => array(
        'MySQL', 'MariaDB', 'PostgreSQL'
    ),
    'CMS' => array(
        'TYPO3', 'Wordpress', 'Drupal'
    ),
    'Framework' => array(
        'Vue.js', 'Bootstrap'
    ),
    'Diverses' => array(
        'Node.js', 'Vim', 'Sass', 'jQuery', 'Drush', 'Git', 'Virtualbox', 'Grafana'
    ),
    'Paketverwaltung' => array(
        'npm', 'Composer', 'Homebrew', 'pip'
    ),
    'Betriebssysteme' => array(
        'macOS', 'Windows', 'Ubuntu', 'Raspbian', 'Kali Linux'
    ),
    'Hardware' => array(
        'Apple', 'MikroTik', 'Raspberry PI'
    ),
    'Security Toolkits' => array(
        'Wireshark', 'Burp Suite', 'Aircrack', 'John the Ripper', 'Nmap'
    )
);


$educations = array(
    20060101 => array(
        'start_date' => '2006-01-01',
        'end_date' => '2009-05-01',
        'university' => 'FH Joanneum',
        'location' => 'Graz',
        'study_course' => 'Informationsdesign',
        'degree' => 'Bachelor of Arts in Arts and Design',
        'url' => 'https://www.fh-joanneum.at/informationsdesign/bachelor/',
        'ects' => array(
            array(
                'title' => 'Begleitende Seminare',
                'courses' => array(
                    array('points' => 3, 'title' => 'Portfolio'),
                    array('points' => 3, 'title' => 'Seminar zum Berufspraktikum'),
                    array('points' => 2, 'title' => 'Seminar zur Bakkalaureatsarbeit I'),
                    array('points' => 3, 'title' => 'Seminar zur Bakkalaureatsarbeit II')
                )
            ),
            array(
                'title' => 'Berufspraktikum',
                'courses' => array(
                    array('points' => 24, 'title' => 'Berufspraktikum 12 Wochen')
                )
            ),
            array(
                'title' => 'Exhibition Design',
                'courses' => array(
                    array('points' => 1, 'title' => 'Ausstellungsdidaktik')
                )
            ),
            array(
                'title' => 'Humanities',
                'courses' => array(
                    array('points' => 2, 'title' => 'Cultural Studies'),
                    array('points' => 2, 'title' => 'Kunstgeschichte')
                )
            ),
            array(
                'title' => 'Informationsdesign',
                'courses' => array(
                    array('points' => 1, 'title' => 'Advertising'),
                    array('points' => 2, 'title' => 'Informationsdesign 1'),
                    array('points' => 2, 'title' => 'Informationsdesign 2'),
                    array('points' => 3, 'title' => 'Informationsdesign 3'),
                    array('points' => 2, 'title' => 'Ringvorlesung 1'),
                    array('points' => 2, 'title' => 'Ringvorlesung 2'),
                    array('points' => 3, 'title' => 'Typographie')
                )
            ),
            array(
                'title' => 'Media and Interaction Design',
                'courses' => array(
                    array('points' => 3, 'title' => 'Interactive Spaces'),
                    array('points' => 3, 'title' => 'Multimedia Authoring 1'),
                    array('points' => 3, 'title' => 'Multimedia Authoring 2'),
                    array('points' => 8, 'title' => 'Projektarbeit MID'),
                    array('points' => 3, 'title' => 'Time Based Media')
                )
            ),
            array(
                'title' => 'Medien und Kunst',
                'courses' => array(
                    array('points' => 2, 'title' => 'Kunsttheorie und ästhetische Praxis 1'),
                    array('points' => 2, 'title' => 'Kunsttheorie und ästhetische Praxis 2'),
                    array('points' => 2, 'title' => 'Kunsttheorie und ästhetische Praxis 3'),
                    array('points' => 2, 'title' => 'Kunsttheorie und ästhetische Praxis 4'),
                    array('points' => 2, 'title' => 'Medientheorie 1'),
                    array('points' => 1, 'title' => 'Medientheorie 2')
                )
            ),
            array(
                'title' => 'Medientechnologische Kompetenzen',
                'courses' => array(
                    array('points' => 3, 'title' => '3D-Modelling und 3D-Animation'),
                    array('points' => 1, 'title' => 'Anwendungsorientiertes Programmieren'),
                    array('points' => 2, 'title' => 'Audioproduktion 1'),
                    array('points' => 2, 'title' => 'Audioproduktion 2'),
                    array('points' => 2, 'title' => 'Compositing und Postproduktion'),
                    array('points' => 3, 'title' => 'Dynamisches Web'),
                    array('points' => 4, 'title' => 'Grafische Werkzeuge 1'),
                    array('points' => 3, 'title' => 'Grafische Werkzeuge 2'),
                    array('points' => 3, 'title' => 'Medieninformatik 1'),
                    array('points' => 2, 'title' => 'Medieninformatik 2'),
                    array('points' => 2, 'title' => 'Orientierungssysteme / Dynamische Anzeigen'),
                    array('points' => 3, 'title' => 'Streaming und Kompression'),
                    array('points' => 2, 'title' => 'Theorien und Methoden des wissenschaftlichen Arbeitens')
                )
            ),
            array(
                'title' => 'Projektarbeit',
                'courses' => array(
                    array('points' => 2, 'title' => 'Auftragsorientiertes Gestalten 1'),
                    array('points' => 2, 'title' => 'Auftragsorientiertes Gestalten 2'),
                    array('points' => 6, 'title' => 'Projektarbeit 1 - Grundlagen der Gestaltung'),
                    array('points' => 6, 'title' => 'Projektarbeit 2 - Ausstellungen'),
                    array('points' => 6, 'title' => 'Projektarbeit 3 - Video'),
                    array('points' => 6, 'title' => 'Projektarbeit 4 - Virtuelle Firmen')
                )
            ),
            array(
                'title' => 'Soziale und kommunikative Kompetenzen',
                'courses' => array(
                    array('points' => 2, 'title' => 'General English 1'),
                    array('points' => 2, 'title' => 'General English 2'),
                    array('points' => 1, 'title' => 'Kommunikationsmethoden'),
                    array('points' => 2, 'title' => 'Professional English 1'),
                    array('points' => 2, 'title' => 'Professional English 2'),
                    array('points' => 2, 'title' => 'Professional English 3'),
                    array('points' => 2, 'title' => 'Professionelles Schreiben 1'),
                    array('points' => 2, 'title' => 'Professionelles Schreiben 2'),
                    array('points' => 2, 'title' => 'Professionelles Schreiben 3'),
                    array('points' => 1, 'title' => 'Präsentationstechnik')
                )
            ),
            array(
                'title' => 'User Interface Design',
                'courses' => array(
                    array('points' => 2, 'title' => 'E-Learning'),
                    array('points' => 3, 'title' => 'Game based Learning'),
                    array('points' => 2, 'title' => 'Usability Testing'),
                    array('points' => 3, 'title' => 'User interface Design'),
                    array('points' => 2, 'title' => 'User-zentriertes Design')
                )
            ),
            array(
                'title' => 'Wirtschaft und Recht',
                'courses' => array(
                    array('points' => 2, 'title' => 'Grundlagen der Unternehmensführung'),
                    array('points' => 2, 'title' => 'Medienrecht')
                )
            )
        )
    ),
    20100101 => array(
        'start_date' => '2009-10-01',
        'end_date' => '20120331',
        'university' => 'Universität für künstlerische und industrielle Gestaltung',
        'location' => 'Linz',
        'study_course' => 'Interface Cultures',
        'degree' => 'Master of Arts',
        'url' => 'http://interface.ufg.at/',
        'ects' => array(
            array(
                'title' => 'Interface Literacy',
                'courses' => array(
                    array('points' => 15, 'title' => 'Interface Technologien I'),
                    array('points' => 15, 'title' => 'Interaktive Kunst & Medientheorien')
                )
            ),
            array(
                'title' => 'Interface Labor',
                'courses' => array(
                    array('points' => 15, 'title' => 'Interface Labor I'),
                    array('points' => 15, 'title' => 'Module aus Interface Cultures und/oder verwandten Fächern')
                )
            ),
            array(
                'title' => 'Weiterführende Labors',
                'courses' => array(
                    array('points' => 15, 'title' => 'Advanced Interface Labor'),
                    array('points' => 15, 'title' => 'Freie Wahlfächer')
                )
            ),
            array(
                'title' => 'Masterarbeit',
                'courses' => array(
                    array('points' => 15, 'title' => 'Theoretische Masterarbeit'),
                    array('points' => 15, 'title' => 'Praktisches Masterprojekt')
                )
            )
        )
    )
);
krsort($educations);


$privateEducations = array(
    array(
        'title' => 'Chaosradio',
        'url' => 'https://chaosradio.de/',
        'img' => 'chaosradio.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'The CyberWire',
        'url' => 'https://www.thecyberwire.com/',
        'img' => 'cyberwire.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Darknet Diaries',
        'url' => 'https://darknetdiaries.com/',
        'img' => 'darknet-diaries.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Donau Tech Radio - DTR',
        'url' => 'https://dtr.fm/',
        'img' => 'donau-tech-radio.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Grumpy Old Geeks',
        'url' => 'http://gog.show/',
        'img' => 'grumpy-old-geeks.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Alternativlos',
        'url' => 'https://www.alternativlos.org/',
        'img' => 'alternativlos.svg',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Brakeing Down Security Podcast',
        'url' => 'http://brakeingsecurity.com/',
        'img' => 'brakeing-down-security.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'CRE: Technik, Kultur, Gesellschaft',
        'url' => 'https://cre.fm/',
        'img' => 'cre.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Future State',
        'url' => 'https://futurestatepodcast.com/',
        'img' => 'future-state.jpg',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Hacking Humans',
        'url' => 'https://thecyberwire.com/podcasts/hacking-humans.html',
        'img' => 'hacking-humans.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Internet History Podcast',
        'url' => 'http://www.internethistorypodcast.com/',
        'img' => 'internet-history-podcast.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Malicious Life',
        'url' => 'https://malicious.life/',
        'img' => 'malicious-life.jpg',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Rechts&shy;belehrung',
        'url' => 'https://rechtsbelehrung.com/',
        'img' => 'rechtsbelehrung.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Recorded Future',
        'url' => 'https://www.recordedfuture.com/resources/podcasts/',
        'img' => 'recorded-future.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Reply All',
        'url' => 'https://www.gimletmedia.com/reply-all/',
        'img' => 'reply-all.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Risky Business',
        'url' => 'https://risky.biz/netcasts/risky-business/',
        'img' => 'risky-biz.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Root Access',
        'url' => 'https://www.rootaccesspodcast.com/',
        'img' => 'root-access.jpg',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'ScriptCast - A podcast about JavaScript',
        'url' => 'https://javascript-podcast.com/',
        'img' => 'scriptcast.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Was soll das?',
        'url' => 'https://twitter.com/podwassolldas',
        'img' => 'was-soll-das.png',
        'type' => 'Podcast'
    ),
    array(
        'title' => 'Working Draft',
        'url' => 'https://workingdraft.de/',
        'img' => 'working-draft.png',
        'type' => 'Podcast'
    ),

    array(
        'title' => 'Black Hat',
        'url' => 'https://www.youtube.com/user/BlackHatOfficialYT',
        'img' => 'blackhat.jpg',
        'type' => 'Videos'
    ),
    array(
        'title' => 'CCC',
        'url' => 'https://media.ccc.de/',
        'img' => 'ccc.png',
        'type' => 'Videos'
    ),
    array(
        'title' => 'DEFCON',
        'url' => 'https://www.youtube.com/user/DEFCONConference/',
        'img' => 'defcon.jpg',
        'type' => 'Videos'
    ),
    array(
        'title' => 'HAK5',
        'url' => 'https://www.youtube.com/channel/UC3s0BtrBJpwNDaflRSoiieQ',
        'img' => 'hak5.jpg',
        'type' => 'Videos'
    ),

    array(
        'title' => 'Hack The Box',
        'url' => 'https://www.hackthebox.eu/',
        'img' => 'hackthebox.png',
        'type' => 'Website'
    ),

    array(
        'title' => 'The Tangled Web',
        'url' => 'https://nostarch.com/tangledweb',
        'img' => 'tangled-web.jpg',
        'type' => 'Buch'
    ),
    array(
        'title' => 'Smart Girl\'s Guide to Privacy',
        'url' => 'https://nostarch.com/smartgirlsguide',
        'img' => 'smart-girls-guide-to-privacy.jpg',
        'type' => 'Buch'
    ),
    array(
        'title' => 'Ghost in the Wires',
        'url' => 'https://www.mitnicksecurity.com/shopping/books-by-kevin-mitnick',
        'img' => 'ghost-in-the-wires.jpg',
        'type' => 'Buch'
    )

);
usort($privateEducations, array('Utils', 'cmpTitleAsc'));