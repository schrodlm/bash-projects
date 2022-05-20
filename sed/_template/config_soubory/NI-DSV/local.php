<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-DSV--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIDSV--garant';
$conf['manager'] = '@--NIDSV--author, @--NIDSV--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-DSV--';
$conf['edux']['subject']['code']['clean']='--NIDSV--';