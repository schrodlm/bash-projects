<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZS10--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZS10--garant';
$conf['manager'] = '@--BIZS10--author, @--BIZS10--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZS10--';
$conf['edux']['subject']['code']['clean']='--BIZS10--';