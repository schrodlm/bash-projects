<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-HSC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIHSC--garant';
$conf['manager'] = '@--NIHSC--author, @--NIHSC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-HSC--';
$conf['edux']['subject']['code']['clean']='--NIHSC--';