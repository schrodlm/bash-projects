<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TVR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITVR--garant';
$conf['manager'] = '@--NITVR--author, @--NITVR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TVR--';
$conf['edux']['subject']['code']['clean']='--NITVR--';