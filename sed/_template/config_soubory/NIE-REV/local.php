<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-REV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEREV--garant';
$conf['manager'] = '@--NIEREV--author, @--NIEREV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-REV--';
$conf['edux']['subject']['code']['clean']='--NIEREV--';