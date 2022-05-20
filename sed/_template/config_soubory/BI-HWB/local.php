<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-HWB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIHWB--garant';
$conf['manager'] = '@--BIHWB--author, @--BIHWB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-HWB--';
$conf['edux']['subject']['code']['clean']='--BIHWB--';