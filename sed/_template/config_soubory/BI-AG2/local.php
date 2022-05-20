<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-AG2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIAG2--garant';
$conf['manager'] = '@--BIAG2--author, @--BIAG2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-AG2--';
$conf['edux']['subject']['code']['clean']='--BIAG2--';