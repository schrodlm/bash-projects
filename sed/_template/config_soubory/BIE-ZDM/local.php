<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ZDM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEZDM--garant';
$conf['manager'] = '@--BIEZDM--author, @--BIEZDM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ZDM--';
$conf['edux']['subject']['code']['clean']='--BIEZDM--';