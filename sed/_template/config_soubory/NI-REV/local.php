<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-REV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIREV--garant';
$conf['manager'] = '@--NIREV--author, @--NIREV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-REV--';
$conf['edux']['subject']['code']['clean']='--NIREV--';