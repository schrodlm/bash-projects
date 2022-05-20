<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ICS.18--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIICS.18--garant';
$conf['manager'] = '@--BIICS.18--author, @--BIICS.18--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ICS.18--';
$conf['edux']['subject']['code']['clean']='--BIICS.18--';