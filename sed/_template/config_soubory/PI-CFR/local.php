<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-CFR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PICFR--garant';
$conf['manager'] = '@--PICFR--author, @--PICFR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-CFR--';
$conf['edux']['subject']['code']['clean']='--PICFR--';