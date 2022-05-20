<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-FME.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIFME.1--garant';
$conf['manager'] = '@--PIFME.1--author, @--PIFME.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-FME.1--';
$conf['edux']['subject']['code']['clean']='--PIFME.1--';