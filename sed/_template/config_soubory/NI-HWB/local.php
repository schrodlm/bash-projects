<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-HWB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIHWB--garant';
$conf['manager'] = '@--NIHWB--author, @--NIHWB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-HWB--';
$conf['edux']['subject']['code']['clean']='--NIHWB--';