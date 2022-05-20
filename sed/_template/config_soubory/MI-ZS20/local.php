<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MI-ZS20--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIZS20--garant';
$conf['manager'] = '@--MIZS20--author, @--MIZS20--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MI-ZS20--';
$conf['edux']['subject']['code']['clean']='--MIZS20--';