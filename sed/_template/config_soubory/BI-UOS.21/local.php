<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-UOS.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIUOS.21--garant';
$conf['manager'] = '@--BIUOS.21--author, @--BIUOS.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-UOS.21--';
$conf['edux']['subject']['code']['clean']='--BIUOS.21--';