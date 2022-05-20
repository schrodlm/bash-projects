<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TS1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITS1--garant';
$conf['manager'] = '@--NITS1--author, @--NITS1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TS1--';
$conf['edux']['subject']['code']['clean']='--NITS1--';