<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-GIT.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIGIT.21--garant';
$conf['manager'] = '@--BIGIT.21--author, @--BIGIT.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-GIT.21--';
$conf['edux']['subject']['code']['clean']='--BIGIT.21--';