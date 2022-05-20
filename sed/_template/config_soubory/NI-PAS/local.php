<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PAS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPAS--garant';
$conf['manager'] = '@--NIPAS--author, @--NIPAS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PAS--';
$conf['edux']['subject']['code']['clean']='--NIPAS--';