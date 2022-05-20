<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-CZ1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIECZ1.21--garant';
$conf['manager'] = '@--BIECZ1.21--author, @--BIECZ1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-CZ1.21--';
$conf['edux']['subject']['code']['clean']='--BIECZ1.21--';