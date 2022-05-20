<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-IOS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIIOS--garant';
$conf['manager'] = '@--NIIOS--author, @--NIIOS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-IOS--';
$conf['edux']['subject']['code']['clean']='--NIIOS--';