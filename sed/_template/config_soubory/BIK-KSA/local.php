<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-KSA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKKSA--garant';
$conf['manager'] = '@--BIKKSA--author, @--BIKKSA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-KSA--';
$conf['edux']['subject']['code']['clean']='--BIKKSA--';