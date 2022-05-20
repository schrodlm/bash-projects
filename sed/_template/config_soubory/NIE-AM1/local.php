<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-AM1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEAM1--garant';
$conf['manager'] = '@--NIEAM1--author, @--NIEAM1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-AM1--';
$conf['edux']['subject']['code']['clean']='--NIEAM1--';