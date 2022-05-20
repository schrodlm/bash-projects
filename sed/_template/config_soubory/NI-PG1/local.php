<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PG1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPG1--garant';
$conf['manager'] = '@--NIPG1--author, @--NIPG1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PG1--';
$conf['edux']['subject']['code']['clean']='--NIPG1--';