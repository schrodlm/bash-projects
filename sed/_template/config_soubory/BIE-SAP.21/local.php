<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-SAP.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIESAP.21--garant';
$conf['manager'] = '@--BIESAP.21--author, @--BIESAP.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-SAP.21--';
$conf['edux']['subject']['code']['clean']='--BIESAP.21--';