<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-ZDM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKZDM--garant';
$conf['manager'] = '@--BIKZDM--author, @--BIKZDM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-ZDM--';
$conf['edux']['subject']['code']['clean']='--BIKZDM--';