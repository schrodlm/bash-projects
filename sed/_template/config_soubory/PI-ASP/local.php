<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-ASP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIASP--garant';
$conf['manager'] = '@--PIASP--author, @--PIASP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-ASP--';
$conf['edux']['subject']['code']['clean']='--PIASP--';