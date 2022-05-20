<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-VMM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIVMM--garant';
$conf['manager'] = '@--NIVMM--author, @--NIVMM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-VMM--';
$conf['edux']['subject']['code']['clean']='--NIVMM--';