<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-OSY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIOSY--garant';
$conf['manager'] = '@--NIOSY--author, @--NIOSY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-OSY--';
$conf['edux']['subject']['code']['clean']='--NIOSY--';