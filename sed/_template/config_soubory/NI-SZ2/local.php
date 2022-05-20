<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SZ2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISZ2--garant';
$conf['manager'] = '@--NISZ2--author, @--NISZ2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SZ2--';
$conf['edux']['subject']['code']['clean']='--NISZ2--';