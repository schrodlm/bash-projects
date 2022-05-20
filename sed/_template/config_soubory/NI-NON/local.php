<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-NON--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NINON--garant';
$conf['manager'] = '@--NINON--author, @--NINON--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-NON--';
$conf['edux']['subject']['code']['clean']='--NINON--';