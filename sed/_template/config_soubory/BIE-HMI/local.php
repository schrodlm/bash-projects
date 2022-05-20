<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-HMI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEHMI--garant';
$conf['manager'] = '@--BIEHMI--author, @--BIEHMI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-HMI--';
$conf['edux']['subject']['code']['clean']='--BIEHMI--';