<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PDD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPDD--garant';
$conf['manager'] = '@--NIPDD--author, @--NIPDD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PDD--';
$conf['edux']['subject']['code']['clean']='--NIPDD--';