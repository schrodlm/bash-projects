<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-PRO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIPRO--garant';
$conf['manager'] = '@--PIPRO--author, @--PIPRO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-PRO--';
$conf['edux']['subject']['code']['clean']='--PIPRO--';