<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-MEK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKMEK--garant';
$conf['manager'] = '@--BIKMEK--author, @--BIKMEK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-MEK--';
$conf['edux']['subject']['code']['clean']='--BIKMEK--';