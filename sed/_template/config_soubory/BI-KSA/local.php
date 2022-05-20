<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-KSA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKSA--garant';
$conf['manager'] = '@--BIKSA--author, @--BIKSA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-KSA--';
$conf['edux']['subject']['code']['clean']='--BIKSA--';