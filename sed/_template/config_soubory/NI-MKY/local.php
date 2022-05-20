<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MKY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMKY--garant';
$conf['manager'] = '@--NIMKY--author, @--NIMKY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MKY--';
$conf['edux']['subject']['code']['clean']='--NIMKY--';