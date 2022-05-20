<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZRS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZRS--garant';
$conf['manager'] = '@--BIZRS--author, @--BIZRS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZRS--';
$conf['edux']['subject']['code']['clean']='--BIZRS--';