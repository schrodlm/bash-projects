<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-DPR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIDPR--garant';
$conf['manager'] = '@--BIDPR--author, @--BIDPR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-DPR--';
$conf['edux']['subject']['code']['clean']='--BIDPR--';