<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-PIS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEPIS--garant';
$conf['manager'] = '@--NIEPIS--author, @--NIEPIS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-PIS--';
$conf['edux']['subject']['code']['clean']='--NIEPIS--';