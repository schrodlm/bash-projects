<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TKA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITKA--garant';
$conf['manager'] = '@--NITKA--author, @--NITKA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TKA--';
$conf['edux']['subject']['code']['clean']='--NITKA--';