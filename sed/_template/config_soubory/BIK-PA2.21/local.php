<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PA2.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPA2.21--garant';
$conf['manager'] = '@--BIKPA2.21--author, @--BIKPA2.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PA2.21--';
$conf['edux']['subject']['code']['clean']='--BIKPA2.21--';