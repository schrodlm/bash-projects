<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-CS3--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BICS3--garant';
$conf['manager'] = '@--BICS3--author, @--BICS3--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-CS3--';
$conf['edux']['subject']['code']['clean']='--BICS3--';