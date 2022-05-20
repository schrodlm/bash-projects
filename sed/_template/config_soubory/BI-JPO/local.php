<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-JPO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIJPO--garant';
$conf['manager'] = '@--BIJPO--author, @--BIJPO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-JPO--';
$conf['edux']['subject']['code']['clean']='--BIJPO--';