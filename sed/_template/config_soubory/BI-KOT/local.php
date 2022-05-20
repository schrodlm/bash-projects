<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-KOT--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKOT--garant';
$conf['manager'] = '@--BIKOT--author, @--BIKOT--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-KOT--';
$conf['edux']['subject']['code']['clean']='--BIKOT--';