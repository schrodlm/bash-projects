<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-AM1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIAM1--garant';
$conf['manager'] = '@--NIAM1--author, @--NIAM1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-AM1--';
$conf['edux']['subject']['code']['clean']='--NIAM1--';