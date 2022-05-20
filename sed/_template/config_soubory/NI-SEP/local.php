<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SEP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISEP--garant';
$conf['manager'] = '@--NISEP--author, @--NISEP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SEP--';
$conf['edux']['subject']['code']['clean']='--NISEP--';