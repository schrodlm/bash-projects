<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PRR.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPRR.21--garant';
$conf['manager'] = '@--BIKPRR.21--author, @--BIKPRR.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PRR.21--';
$conf['edux']['subject']['code']['clean']='--BIKPRR.21--';