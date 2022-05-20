<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-VEM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIVEM--garant';
$conf['manager'] = '@--NIVEM--author, @--NIVEM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-VEM--';
$conf['edux']['subject']['code']['clean']='--NIVEM--';