<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-MTI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEMTI--garant';
$conf['manager'] = '@--NIEMTI--author, @--NIEMTI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-MTI--';
$conf['edux']['subject']['code']['clean']='--NIEMTI--';