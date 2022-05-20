<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-RUN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIRUN--garant';
$conf['manager'] = '@--NIRUN--author, @--NIRUN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-RUN--';
$conf['edux']['subject']['code']['clean']='--NIRUN--';