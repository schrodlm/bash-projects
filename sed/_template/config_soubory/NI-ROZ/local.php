<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ROZ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIROZ--garant';
$conf['manager'] = '@--NIROZ--author, @--NIROZ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ROZ--';
$conf['edux']['subject']['code']['clean']='--NIROZ--';