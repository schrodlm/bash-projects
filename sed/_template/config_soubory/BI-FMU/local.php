<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-FMU--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIFMU--garant';
$conf['manager'] = '@--BIFMU--author, @--BIFMU--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-FMU--';
$conf['edux']['subject']['code']['clean']='--BIFMU--';