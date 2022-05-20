<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-LIN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKLIN--garant';
$conf['manager'] = '@--BIKLIN--author, @--BIKLIN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-LIN--';
$conf['edux']['subject']['code']['clean']='--BIKLIN--';