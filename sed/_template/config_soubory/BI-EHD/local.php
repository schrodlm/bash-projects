<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EHD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEHD--garant';
$conf['manager'] = '@--BIEHD--author, @--BIEHD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EHD--';
$conf['edux']['subject']['code']['clean']='--BIEHD--';