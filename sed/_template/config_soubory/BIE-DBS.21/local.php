<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-DBS.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEDBS.21--garant';
$conf['manager'] = '@--BIEDBS.21--author, @--BIEDBS.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-DBS.21--';
$conf['edux']['subject']['code']['clean']='--BIEDBS.21--';