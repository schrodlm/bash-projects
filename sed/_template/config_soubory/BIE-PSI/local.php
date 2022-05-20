<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PSI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPSI--garant';
$conf['manager'] = '@--BIEPSI--author, @--BIEPSI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PSI--';
$conf['edux']['subject']['code']['clean']='--BIEPSI--';