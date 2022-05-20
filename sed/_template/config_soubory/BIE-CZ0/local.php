<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-CZ0--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIECZ0--garant';
$conf['manager'] = '@--BIECZ0--author, @--BIECZ0--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-CZ0--';
$conf['edux']['subject']['code']['clean']='--BIECZ0--';