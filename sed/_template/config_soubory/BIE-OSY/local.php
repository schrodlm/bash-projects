<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-OSY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEOSY--garant';
$conf['manager'] = '@--BIEOSY--author, @--BIEOSY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-OSY--';
$conf['edux']['subject']['code']['clean']='--BIEOSY--';