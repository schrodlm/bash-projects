<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PST--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPST--garant';
$conf['manager'] = '@--BIEPST--author, @--BIEPST--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PST--';
$conf['edux']['subject']['code']['clean']='--BIEPST--';