<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-SSB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIESSB--garant';
$conf['manager'] = '@--BIESSB--author, @--BIESSB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-SSB--';
$conf['edux']['subject']['code']['clean']='--BIESSB--';