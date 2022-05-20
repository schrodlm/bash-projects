<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MPI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMPI--garant';
$conf['manager'] = '@--NIMPI--author, @--NIMPI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MPI--';
$conf['edux']['subject']['code']['clean']='--NIMPI--';