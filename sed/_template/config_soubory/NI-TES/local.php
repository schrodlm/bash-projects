<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TES--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITES--garant';
$conf['manager'] = '@--NITES--author, @--NITES--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TES--';
$conf['edux']['subject']['code']['clean']='--NITES--';