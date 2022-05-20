<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-AG1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKAG1--garant';
$conf['manager'] = '@--BIKAG1--author, @--BIKAG1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-AG1--';
$conf['edux']['subject']['code']['clean']='--BIKAG1--';