<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EP1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEP1--garant';
$conf['manager'] = '@--BIEP1--author, @--BIEP1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EP1--';
$conf['edux']['subject']['code']['clean']='--BIEP1--';