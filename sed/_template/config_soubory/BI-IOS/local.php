<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-IOS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIIOS--garant';
$conf['manager'] = '@--BIIOS--author, @--BIIOS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-IOS--';
$conf['edux']['subject']['code']['clean']='--BIIOS--';