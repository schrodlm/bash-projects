<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-VHS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIVHS--garant';
$conf['manager'] = '@--BIVHS--author, @--BIVHS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-VHS--';
$conf['edux']['subject']['code']['clean']='--BIVHS--';