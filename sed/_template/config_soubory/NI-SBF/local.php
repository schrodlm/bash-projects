<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SBF--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISBF--garant';
$conf['manager'] = '@--NISBF--author, @--NISBF--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SBF--';
$conf['edux']['subject']['code']['clean']='--NISBF--';