<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PPA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPPA--garant';
$conf['manager'] = '@--BIKPPA--author, @--BIKPPA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PPA--';
$conf['edux']['subject']['code']['clean']='--BIKPPA--';