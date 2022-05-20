<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-AVG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIAVG--garant';
$conf['manager'] = '@--PIAVG--author, @--PIAVG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-AVG--';
$conf['edux']['subject']['code']['clean']='--PIAVG--';