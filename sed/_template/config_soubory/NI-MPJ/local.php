<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MPJ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMPJ--garant';
$conf['manager'] = '@--NIMPJ--author, @--NIMPJ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MPJ--';
$conf['edux']['subject']['code']['clean']='--NIMPJ--';