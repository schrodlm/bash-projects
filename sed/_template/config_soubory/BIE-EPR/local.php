<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-EPR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEEPR--garant';
$conf['manager'] = '@--BIEEPR--author, @--BIEEPR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-EPR--';
$conf['edux']['subject']['code']['clean']='--BIEEPR--';