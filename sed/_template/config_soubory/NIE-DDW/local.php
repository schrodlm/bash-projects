<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-DDW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEDDW--garant';
$conf['manager'] = '@--NIEDDW--author, @--NIEDDW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-DDW--';
$conf['edux']['subject']['code']['clean']='--NIEDDW--';