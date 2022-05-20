<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ICS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIICS--garant';
$conf['manager'] = '@--BIICS--author, @--BIICS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ICS--';
$conf['edux']['subject']['code']['clean']='--BIICS--';