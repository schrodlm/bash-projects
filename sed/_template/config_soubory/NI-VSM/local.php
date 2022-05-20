<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-VSM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIVSM--garant';
$conf['manager'] = '@--NIVSM--author, @--NIVSM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-VSM--';
$conf['edux']['subject']['code']['clean']='--NIVSM--';