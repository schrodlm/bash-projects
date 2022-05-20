<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-AG1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIAG1--garant';
$conf['manager'] = '@--BIAG1--author, @--BIAG1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-AG1--';
$conf['edux']['subject']['code']['clean']='--BIAG1--';