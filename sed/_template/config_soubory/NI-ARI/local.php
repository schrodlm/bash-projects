<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ARI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIARI--garant';
$conf['manager'] = '@--NIARI--author, @--NIARI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ARI--';
$conf['edux']['subject']['code']['clean']='--NIARI--';