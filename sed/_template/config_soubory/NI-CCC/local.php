<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-CCC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NICCC--garant';
$conf['manager'] = '@--NICCC--author, @--NICCC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-CCC--';
$conf['edux']['subject']['code']['clean']='--NICCC--';