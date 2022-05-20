<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PAM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPAM--garant';
$conf['manager'] = '@--NIPAM--author, @--NIPAM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PAM--';
$conf['edux']['subject']['code']['clean']='--NIPAM--';