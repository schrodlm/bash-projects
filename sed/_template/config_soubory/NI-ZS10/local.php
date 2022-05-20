<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ZS10--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIZS10--garant';
$conf['manager'] = '@--NIZS10--author, @--NIZS10--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ZS10--';
$conf['edux']['subject']['code']['clean']='--NIZS10--';