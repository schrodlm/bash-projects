<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZUM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZUM--garant';
$conf['manager'] = '@--BIZUM--author, @--BIZUM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZUM--';
$conf['edux']['subject']['code']['clean']='--BIZUM--';