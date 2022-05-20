<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-DSS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIDSS--garant';
$conf['manager'] = '@--NIDSS--author, @--NIDSS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-DSS--';
$conf['edux']['subject']['code']['clean']='--NIDSS--';