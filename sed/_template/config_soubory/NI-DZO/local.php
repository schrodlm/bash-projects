<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-DZO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIDZO--garant';
$conf['manager'] = '@--NIDZO--author, @--NIDZO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-DZO--';
$conf['edux']['subject']['code']['clean']='--NIDZO--';