<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ZS30--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIZS30--garant';
$conf['manager'] = '@--NIZS30--author, @--NIZS30--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ZS30--';
$conf['edux']['subject']['code']['clean']='--NIZS30--';