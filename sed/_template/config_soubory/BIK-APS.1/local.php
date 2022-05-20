<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-APS.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKAPS.1--garant';
$conf['manager'] = '@--BIKAPS.1--author, @--BIKAPS.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-APS.1--';
$conf['edux']['subject']['code']['clean']='--BIKAPS.1--';