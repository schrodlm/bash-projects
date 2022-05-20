<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TUR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITUR--garant';
$conf['manager'] = '@--BITUR--author, @--BITUR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TUR--';
$conf['edux']['subject']['code']['clean']='--BITUR--';