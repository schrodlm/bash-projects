<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SWE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISWE--garant';
$conf['manager'] = '@--NISWE--author, @--NISWE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SWE--';
$conf['edux']['subject']['code']['clean']='--NISWE--';