<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-CAP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NICAP--garant';
$conf['manager'] = '@--NICAP--author, @--NICAP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-CAP--';
$conf['edux']['subject']['code']['clean']='--NICAP--';