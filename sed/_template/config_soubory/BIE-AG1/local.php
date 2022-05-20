<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-AG1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEAG1--garant';
$conf['manager'] = '@--BIEAG1--author, @--BIEAG1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-AG1--';
$conf['edux']['subject']['code']['clean']='--BIEAG1--';