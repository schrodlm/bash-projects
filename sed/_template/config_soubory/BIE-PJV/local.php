<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PJV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPJV--garant';
$conf['manager'] = '@--BIEPJV--author, @--BIEPJV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PJV--';
$conf['edux']['subject']['code']['clean']='--BIEPJV--';