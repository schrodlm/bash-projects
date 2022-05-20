<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-TJV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIETJV--garant';
$conf['manager'] = '@--BIETJV--author, @--BIETJV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-TJV--';
$conf['edux']['subject']['code']['clean']='--BIETJV--';