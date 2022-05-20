<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-TUR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIETUR--garant';
$conf['manager'] = '@--BIETUR--author, @--BIETUR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-TUR--';
$conf['edux']['subject']['code']['clean']='--BIETUR--';