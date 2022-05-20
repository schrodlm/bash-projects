<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-NSS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NINSS--garant';
$conf['manager'] = '@--NINSS--author, @--NINSS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-NSS--';
$conf['edux']['subject']['code']['clean']='--NINSS--';