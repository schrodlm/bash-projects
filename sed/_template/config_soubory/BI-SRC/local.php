<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SRC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISRC--garant';
$conf['manager'] = '@--BISRC--author, @--BISRC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SRC--';
$conf['edux']['subject']['code']['clean']='--BISRC--';