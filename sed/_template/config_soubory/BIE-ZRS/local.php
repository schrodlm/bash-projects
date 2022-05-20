<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ZRS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEZRS--garant';
$conf['manager'] = '@--BIEZRS--author, @--BIEZRS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ZRS--';
$conf['edux']['subject']['code']['clean']='--BIEZRS--';