<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-SYP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIESYP--garant';
$conf['manager'] = '@--NIESYP--author, @--NIESYP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-SYP--';
$conf['edux']['subject']['code']['clean']='--NIESYP--';