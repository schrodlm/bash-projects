<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-TSP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIETSP--garant';
$conf['manager'] = '@--NIETSP--author, @--NIETSP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-TSP--';
$conf['edux']['subject']['code']['clean']='--NIETSP--';