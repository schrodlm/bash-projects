<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-PDP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEPDP--garant';
$conf['manager'] = '@--NIEPDP--author, @--NIEPDP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-PDP--';
$conf['edux']['subject']['code']['clean']='--NIEPDP--';