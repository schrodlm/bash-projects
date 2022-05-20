<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-EPC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEPC--garant';
$conf['manager'] = '@--NIEPC--author, @--NIEPC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-EPC--';
$conf['edux']['subject']['code']['clean']='--NIEPC--';