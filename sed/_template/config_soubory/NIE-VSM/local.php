<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-VSM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEVSM--garant';
$conf['manager'] = '@--NIEVSM--author, @--NIEVSM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-VSM--';
$conf['edux']['subject']['code']['clean']='--NIEVSM--';