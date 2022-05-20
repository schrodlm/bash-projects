<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-VAP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIVAP--garant';
$conf['manager'] = '@--PIVAP--author, @--PIVAP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-VAP--';
$conf['edux']['subject']['code']['clean']='--PIVAP--';