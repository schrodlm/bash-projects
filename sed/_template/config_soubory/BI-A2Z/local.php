<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-A2Z--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIA2Z--garant';
$conf['manager'] = '@--BIA2Z--author, @--BIA2Z--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-A2Z--';
$conf['edux']['subject']['code']['clean']='--BIA2Z--';