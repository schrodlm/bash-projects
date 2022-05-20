<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-GAK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEGAK--garant';
$conf['manager'] = '@--NIEGAK--author, @--NIEGAK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-GAK--';
$conf['edux']['subject']['code']['clean']='--NIEGAK--';