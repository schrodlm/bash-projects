<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-GEN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIGEN--garant';
$conf['manager'] = '@--NIGEN--author, @--NIGEN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-GEN--';
$conf['edux']['subject']['code']['clean']='--NIGEN--';