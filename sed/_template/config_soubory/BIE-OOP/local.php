<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-OOP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEOOP--garant';
$conf['manager'] = '@--BIEOOP--author, @--BIEOOP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-OOP--';
$conf['edux']['subject']['code']['clean']='--BIEOOP--';