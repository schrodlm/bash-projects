<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PPA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPPA--garant';
$conf['manager'] = '@--BIEPPA--author, @--BIEPPA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PPA--';
$conf['edux']['subject']['code']['clean']='--BIEPPA--';