<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-LNG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NILNG--garant';
$conf['manager'] = '@--NILNG--author, @--NILNG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-LNG--';
$conf['edux']['subject']['code']['clean']='--NILNG--';