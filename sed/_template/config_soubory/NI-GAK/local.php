<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-GAK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIGAK--garant';
$conf['manager'] = '@--NIGAK--author, @--NIGAK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-GAK--';
$conf['edux']['subject']['code']['clean']='--NIGAK--';