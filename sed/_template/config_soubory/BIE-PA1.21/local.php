<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPA1.21--garant';
$conf['manager'] = '@--BIEPA1.21--author, @--BIEPA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PA1.21--';
$conf['edux']['subject']['code']['clean']='--BIEPA1.21--';