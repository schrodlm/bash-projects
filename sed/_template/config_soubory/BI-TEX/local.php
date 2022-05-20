<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TEX--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITEX--garant';
$conf['manager'] = '@--BITEX--author, @--BITEX--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TEX--';
$conf['edux']['subject']['code']['clean']='--BITEX--';