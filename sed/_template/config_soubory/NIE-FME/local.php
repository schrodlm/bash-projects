<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-FME--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEFME--garant';
$conf['manager'] = '@--NIEFME--author, @--NIEFME--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-FME--';
$conf['edux']['subject']['code']['clean']='--NIEFME--';