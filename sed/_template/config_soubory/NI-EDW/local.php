<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-EDW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEDW--garant';
$conf['manager'] = '@--NIEDW--author, @--NIEDW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-EDW--';
$conf['edux']['subject']['code']['clean']='--NIEDW--';