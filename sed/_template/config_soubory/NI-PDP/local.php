<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PDP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPDP--garant';
$conf['manager'] = '@--NIPDP--author, @--NIPDP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PDP--';
$conf['edux']['subject']['code']['clean']='--NIPDP--';