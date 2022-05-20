<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PJV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPJV--garant';
$conf['manager'] = '@--BIPJV--author, @--BIPJV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PJV--';
$conf['edux']['subject']['code']['clean']='--BIPJV--';