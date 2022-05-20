<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-ANM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIANM--garant';
$conf['manager'] = '@--PIANM--author, @--PIANM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-ANM--';
$conf['edux']['subject']['code']['clean']='--PIANM--';