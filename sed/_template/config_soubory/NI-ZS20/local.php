<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ZS20--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIZS20--garant';
$conf['manager'] = '@--NIZS20--author, @--NIZS20--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ZS20--';
$conf['edux']['subject']['code']['clean']='--NIZS20--';