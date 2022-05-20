<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-UMI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIUMI--garant';
$conf['manager'] = '@--NIUMI--author, @--NIUMI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-UMI--';
$conf['edux']['subject']['code']['clean']='--NIUMI--';