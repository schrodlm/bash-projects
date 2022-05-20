<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-SSB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKSSB--garant';
$conf['manager'] = '@--BIKSSB--author, @--BIKSSB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-SSB--';
$conf['edux']['subject']['code']['clean']='--BIKSSB--';