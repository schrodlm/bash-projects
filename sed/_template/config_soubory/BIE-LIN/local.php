<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-LIN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIELIN--garant';
$conf['manager'] = '@--BIELIN--author, @--BIELIN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-LIN--';
$conf['edux']['subject']['code']['clean']='--BIELIN--';