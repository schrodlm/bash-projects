<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZDM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZDM--garant';
$conf['manager'] = '@--BIZDM--author, @--BIZDM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZDM--';
$conf['edux']['subject']['code']['clean']='--BIZDM--';