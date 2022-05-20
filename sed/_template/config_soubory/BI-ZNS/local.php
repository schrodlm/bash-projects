<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZNS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZNS--garant';
$conf['manager'] = '@--BIZNS--author, @--BIZNS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZNS--';
$conf['edux']['subject']['code']['clean']='--BIZNS--';