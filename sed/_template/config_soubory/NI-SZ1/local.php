<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SZ1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISZ1--garant';
$conf['manager'] = '@--NISZ1--author, @--NISZ1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SZ1--';
$conf['edux']['subject']['code']['clean']='--NISZ1--';