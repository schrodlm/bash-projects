<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-TJV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKTJV--garant';
$conf['manager'] = '@--BIKTJV--author, @--BIKTJV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-TJV--';
$conf['edux']['subject']['code']['clean']='--BIKTJV--';