<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-IKM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIIKM--garant';
$conf['manager'] = '@--NIIKM--author, @--NIIKM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-IKM--';
$conf['edux']['subject']['code']['clean']='--NIIKM--';