<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MVI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMVI--garant';
$conf['manager'] = '@--NIMVI--author, @--NIMVI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MVI--';
$conf['edux']['subject']['code']['clean']='--NIMVI--';