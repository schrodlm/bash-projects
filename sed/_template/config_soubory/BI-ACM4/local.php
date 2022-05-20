<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ACM4--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIACM4--garant';
$conf['manager'] = '@--BIACM4--author, @--BIACM4--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ACM4--';
$conf['edux']['subject']['code']['clean']='--BIACM4--';