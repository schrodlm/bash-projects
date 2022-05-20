<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-AAG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIAAG--garant';
$conf['manager'] = '@--BIAAG--author, @--BIAAG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-AAG--';
$conf['edux']['subject']['code']['clean']='--BIAAG--';