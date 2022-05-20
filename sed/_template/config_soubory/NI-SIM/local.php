<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SIM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISIM--garant';
$conf['manager'] = '@--NISIM--author, @--NISIM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SIM--';
$conf['edux']['subject']['code']['clean']='--NISIM--';