<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-EEC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEEEC--garant';
$conf['manager'] = '@--BIEEEC--author, @--BIEEEC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-EEC--';
$conf['edux']['subject']['code']['clean']='--BIEEEC--';