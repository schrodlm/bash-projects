<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-FTR.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIFTR.1--garant';
$conf['manager'] = '@--BIFTR.1--author, @--BIFTR.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-FTR.1--';
$conf['edux']['subject']['code']['clean']='--BIFTR.1--';