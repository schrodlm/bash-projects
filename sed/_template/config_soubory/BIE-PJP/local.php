<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PJP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPJP--garant';
$conf['manager'] = '@--BIEPJP--author, @--BIEPJP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PJP--';
$conf['edux']['subject']['code']['clean']='--BIEPJP--';