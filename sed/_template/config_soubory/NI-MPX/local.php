<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MPX--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMPX--garant';
$conf['manager'] = '@--NIMPX--author, @--NIMPX--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MPX--';
$conf['edux']['subject']['code']['clean']='--NIMPX--';