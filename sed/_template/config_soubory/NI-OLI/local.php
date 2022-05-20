<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-OLI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIOLI--garant';
$conf['manager'] = '@--NIOLI--author, @--NIOLI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-OLI--';
$conf['edux']['subject']['code']['clean']='--NIOLI--';