<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PSI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPSI--garant';
$conf['manager'] = '@--BIKPSI--author, @--BIKPSI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PSI--';
$conf['edux']['subject']['code']['clean']='--BIKPSI--';