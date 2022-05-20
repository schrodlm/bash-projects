<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-TPL--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PITPL--garant';
$conf['manager'] = '@--PITPL--author, @--PITPL--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-TPL--';
$conf['edux']['subject']['code']['clean']='--PITPL--';