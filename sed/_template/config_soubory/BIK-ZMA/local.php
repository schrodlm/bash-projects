<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-ZMA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKZMA--garant';
$conf['manager'] = '@--BIKZMA--author, @--BIKZMA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-ZMA--';
$conf['edux']['subject']['code']['clean']='--BIKZMA--';