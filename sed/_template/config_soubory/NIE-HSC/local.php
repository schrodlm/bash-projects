<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-HSC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEHSC--garant';
$conf['manager'] = '@--NIEHSC--author, @--NIEHSC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-HSC--';
$conf['edux']['subject']['code']['clean']='--NIEHSC--';