<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SSB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISSB--garant';
$conf['manager'] = '@--BISSB--author, @--BISSB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SSB--';
$conf['edux']['subject']['code']['clean']='--BISSB--';