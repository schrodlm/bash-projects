<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-OOP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKOOP--garant';
$conf['manager'] = '@--BIKOOP--author, @--BIKOOP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-OOP--';
$conf['edux']['subject']['code']['clean']='--BIKOOP--';