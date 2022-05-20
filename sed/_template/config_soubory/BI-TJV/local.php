<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TJV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITJV--garant';
$conf['manager'] = '@--BITJV--author, @--BITJV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TJV--';
$conf['edux']['subject']['code']['clean']='--BITJV--';