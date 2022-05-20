<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PIS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPIS--garant';
$conf['manager'] = '@--NIPIS--author, @--NIPIS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PIS--';
$conf['edux']['subject']['code']['clean']='--NIPIS--';