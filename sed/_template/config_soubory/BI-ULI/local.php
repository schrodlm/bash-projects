<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ULI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIULI--garant';
$conf['manager'] = '@--BIULI--author, @--BIULI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ULI--';
$conf['edux']['subject']['code']['clean']='--BIULI--';