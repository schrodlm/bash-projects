<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TSP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITSP--garant';
$conf['manager'] = '@--NITSP--author, @--NITSP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TSP--';
$conf['edux']['subject']['code']['clean']='--NITSP--';