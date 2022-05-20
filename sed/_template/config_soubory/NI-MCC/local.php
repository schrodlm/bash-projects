<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MCC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMCC--garant';
$conf['manager'] = '@--NIMCC--author, @--NIMCC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MCC--';
$conf['edux']['subject']['code']['clean']='--NIMCC--';