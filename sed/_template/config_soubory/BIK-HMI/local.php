<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-HMI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKHMI--garant';
$conf['manager'] = '@--BIKHMI--author, @--BIKHMI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-HMI--';
$conf['edux']['subject']['code']['clean']='--BIKHMI--';