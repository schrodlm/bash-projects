<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ALO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIALO--garant';
$conf['manager'] = '@--BIALO--author, @--BIALO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ALO--';
$conf['edux']['subject']['code']['clean']='--BIALO--';