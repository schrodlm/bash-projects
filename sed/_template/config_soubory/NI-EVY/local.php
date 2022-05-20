<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-EVY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEVY--garant';
$conf['manager'] = '@--NIEVY--author, @--NIEVY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-EVY--';
$conf['edux']['subject']['code']['clean']='--NIEVY--';