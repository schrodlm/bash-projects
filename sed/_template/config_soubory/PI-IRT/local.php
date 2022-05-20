<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-IRT--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIIRT--garant';
$conf['manager'] = '@--PIIRT--author, @--PIIRT--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-IRT--';
$conf['edux']['subject']['code']['clean']='--PIIRT--';