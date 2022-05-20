<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-HWB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEHWB--garant';
$conf['manager'] = '@--BIEHWB--author, @--BIEHWB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-HWB--';
$conf['edux']['subject']['code']['clean']='--BIEHWB--';