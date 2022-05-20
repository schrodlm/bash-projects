<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-UOS.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEUOS.21--garant';
$conf['manager'] = '@--BIEUOS.21--author, @--BIEUOS.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-UOS.21--';
$conf['edux']['subject']['code']['clean']='--BIEUOS.21--';