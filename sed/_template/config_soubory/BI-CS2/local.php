<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-CS2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BICS2--garant';
$conf['manager'] = '@--BICS2--author, @--BICS2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-CS2--';
$conf['edux']['subject']['code']['clean']='--BICS2--';