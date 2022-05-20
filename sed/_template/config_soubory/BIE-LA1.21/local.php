<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-LA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIELA1.21--garant';
$conf['manager'] = '@--BIELA1.21--author, @--BIELA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-LA1.21--';
$conf['edux']['subject']['code']['clean']='--BIELA1.21--';