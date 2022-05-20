<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-SWI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PISWI--garant';
$conf['manager'] = '@--PISWI--author, @--PISWI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-SWI--';
$conf['edux']['subject']['code']['clean']='--PISWI--';