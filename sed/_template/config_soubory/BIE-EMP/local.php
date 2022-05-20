<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-EMP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEEMP--garant';
$conf['manager'] = '@--BIEEMP--author, @--BIEEMP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-EMP--';
$conf['edux']['subject']['code']['clean']='--BIEEMP--';