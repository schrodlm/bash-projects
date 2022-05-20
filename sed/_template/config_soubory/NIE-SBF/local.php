<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-SBF--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIESBF--garant';
$conf['manager'] = '@--NIESBF--author, @--NIESBF--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-SBF--';
$conf['edux']['subject']['code']['clean']='--NIESBF--';