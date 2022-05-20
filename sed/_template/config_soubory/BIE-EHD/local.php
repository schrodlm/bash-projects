<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-EHD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEEHD--garant';
$conf['manager'] = '@--BIEEHD--author, @--BIEEHD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-EHD--';
$conf['edux']['subject']['code']['clean']='--BIEEHD--';