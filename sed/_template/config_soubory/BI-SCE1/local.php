<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SCE1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISCE1--garant';
$conf['manager'] = '@--BISCE1--author, @--BISCE1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SCE1--';
$conf['edux']['subject']['code']['clean']='--BISCE1--';