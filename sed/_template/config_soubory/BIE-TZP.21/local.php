<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-TZP.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIETZP.21--garant';
$conf['manager'] = '@--BIETZP.21--author, @--BIETZP.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-TZP.21--';
$conf['edux']['subject']['code']['clean']='--BIETZP.21--';