<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-MGA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKMGA--garant';
$conf['manager'] = '@--BIKMGA--author, @--BIKMGA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-MGA--';
$conf['edux']['subject']['code']['clean']='--BIKMGA--';