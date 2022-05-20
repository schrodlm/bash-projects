<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-MA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEMA1.21--garant';
$conf['manager'] = '@--BIEMA1.21--author, @--BIEMA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-MA1.21--';
$conf['edux']['subject']['code']['clean']='--BIEMA1.21--';