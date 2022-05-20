<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-AFP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIAFP--garant';
$conf['manager'] = '@--NIAFP--author, @--NIAFP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-AFP--';
$conf['edux']['subject']['code']['clean']='--NIAFP--';