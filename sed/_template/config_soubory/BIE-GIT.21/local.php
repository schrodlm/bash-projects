<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-GIT.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEGIT.21--garant';
$conf['manager'] = '@--BIEGIT.21--author, @--BIEGIT.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-GIT.21--';
$conf['edux']['subject']['code']['clean']='--BIEGIT.21--';