<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-HWB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEHWB--garant';
$conf['manager'] = '@--NIEHWB--author, @--NIEHWB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-HWB--';
$conf['edux']['subject']['code']['clean']='--NIEHWB--';