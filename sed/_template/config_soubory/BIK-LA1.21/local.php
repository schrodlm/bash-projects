<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-LA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKLA1.21--garant';
$conf['manager'] = '@--BIKLA1.21--author, @--BIKLA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-LA1.21--';
$conf['edux']['subject']['code']['clean']='--BIKLA1.21--';