<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PRR.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPRR.21--garant';
$conf['manager'] = '@--BIEPRR.21--author, @--BIEPRR.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PRR.21--';
$conf['edux']['subject']['code']['clean']='--BIEPRR.21--';