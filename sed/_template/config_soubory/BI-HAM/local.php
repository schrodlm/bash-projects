<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-HAM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIHAM--garant';
$conf['manager'] = '@--BIHAM--author, @--BIHAM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-HAM--';
$conf['edux']['subject']['code']['clean']='--BIHAM--';