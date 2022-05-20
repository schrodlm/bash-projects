<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-NSV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PINSV--garant';
$conf['manager'] = '@--PINSV--author, @--PINSV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-NSV--';
$conf['edux']['subject']['code']['clean']='--PINSV--';