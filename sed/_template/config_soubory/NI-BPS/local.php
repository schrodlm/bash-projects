<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-BPS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIBPS--garant';
$conf['manager'] = '@--NIBPS--author, @--NIBPS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-BPS--';
$conf['edux']['subject']['code']['clean']='--NIBPS--';