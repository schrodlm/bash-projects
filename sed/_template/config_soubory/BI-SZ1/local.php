<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SZ1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISZ1--garant';
$conf['manager'] = '@--BISZ1--author, @--BISZ1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SZ1--';
$conf['edux']['subject']['code']['clean']='--BISZ1--';