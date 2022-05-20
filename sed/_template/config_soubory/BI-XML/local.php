<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-XML--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIXML--garant';
$conf['manager'] = '@--BIXML--author, @--BIXML--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-XML--';
$conf['edux']['subject']['code']['clean']='--BIXML--';