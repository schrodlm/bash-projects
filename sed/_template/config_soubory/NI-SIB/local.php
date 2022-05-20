<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SIB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISIB--garant';
$conf['manager'] = '@--NISIB--author, @--NISIB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SIB--';
$conf['edux']['subject']['code']['clean']='--NISIB--';