<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PA2.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPA2.21--garant';
$conf['manager'] = '@--BIEPA2.21--author, @--BIEPA2.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PA2.21--';
$conf['edux']['subject']['code']['clean']='--BIEPA2.21--';