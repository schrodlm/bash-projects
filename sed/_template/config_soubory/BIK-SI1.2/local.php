<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-SI1.2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKSI1.2--garant';
$conf['manager'] = '@--BIKSI1.2--author, @--BIKSI1.2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-SI1.2--';
$conf['edux']['subject']['code']['clean']='--BIKSI1.2--';