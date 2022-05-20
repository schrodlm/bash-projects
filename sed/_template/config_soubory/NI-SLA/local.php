<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SLA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISLA--garant';
$conf['manager'] = '@--NISLA--author, @--NISLA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SLA--';
$conf['edux']['subject']['code']['clean']='--NISLA--';