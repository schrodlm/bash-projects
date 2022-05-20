<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PVR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPVR--garant';
$conf['manager'] = '@--NIPVR--author, @--NIPVR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PVR--';
$conf['edux']['subject']['code']['clean']='--NIPVR--';