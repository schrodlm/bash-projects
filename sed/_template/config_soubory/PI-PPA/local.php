<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-PPA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIPPA--garant';
$conf['manager'] = '@--PIPPA--author, @--PIPPA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-PPA--';
$conf['edux']['subject']['code']['clean']='--PIPPA--';