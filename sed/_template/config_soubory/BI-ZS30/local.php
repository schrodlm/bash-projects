<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZS30--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZS30--garant';
$conf['manager'] = '@--BIZS30--author, @--BIZS30--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZS30--';
$conf['edux']['subject']['code']['clean']='--BIZS30--';