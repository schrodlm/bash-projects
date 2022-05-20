<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-A2L--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIA2L--garant';
$conf['manager'] = '@--BIA2L--author, @--BIA2L--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-A2L--';
$conf['edux']['subject']['code']['clean']='--BIA2L--';