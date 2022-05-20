<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-AM2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEAM2--garant';
$conf['manager'] = '@--NIEAM2--author, @--NIEAM2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-AM2--';
$conf['edux']['subject']['code']['clean']='--NIEAM2--';