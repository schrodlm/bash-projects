<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-UOS.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKUOS.21--garant';
$conf['manager'] = '@--BIKUOS.21--author, @--BIKUOS.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-UOS.21--';
$conf['edux']['subject']['code']['clean']='--BIKUOS.21--';