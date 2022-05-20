<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-MPI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEMPI--garant';
$conf['manager'] = '@--NIEMPI--author, @--NIEMPI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-MPI--';
$conf['edux']['subject']['code']['clean']='--NIEMPI--';