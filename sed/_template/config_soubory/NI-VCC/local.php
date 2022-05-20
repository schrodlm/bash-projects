<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-VCC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIVCC--garant';
$conf['manager'] = '@--NIVCC--author, @--NIVCC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-VCC--';
$conf['edux']['subject']['code']['clean']='--NIVCC--';