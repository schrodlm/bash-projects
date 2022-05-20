<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ARD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIARD--garant';
$conf['manager'] = '@--BIARD--author, @--BIARD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ARD--';
$conf['edux']['subject']['code']['clean']='--BIARD--';