<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PSD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPSD--garant';
$conf['manager'] = '@--NIPSD--author, @--NIPSD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PSD--';
$conf['edux']['subject']['code']['clean']='--NIPSD--';