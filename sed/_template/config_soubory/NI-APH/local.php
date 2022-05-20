<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-APH--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIAPH--garant';
$conf['manager'] = '@--NIAPH--author, @--NIAPH--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-APH--';
$conf['edux']['subject']['code']['clean']='--NIAPH--';