<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--COURSE-CODE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--COURSECODE--garant';
$conf['manager'] = '@--COURSECODE--author, @--COURSECODE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--COURSE-CODE--';
$conf['edux']['subject']['code']['clean']='--COURSECODE--';