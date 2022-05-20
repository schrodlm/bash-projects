<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SCE1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISCE1--garant';
$conf['manager'] = '@--NISCE1--author, @--NISCE1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SCE1--';
$conf['edux']['subject']['code']['clean']='--NISCE1--';