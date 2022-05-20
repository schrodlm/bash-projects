<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-MKY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEMKY--garant';
$conf['manager'] = '@--NIEMKY--author, @--NIEMKY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-MKY--';
$conf['edux']['subject']['code']['clean']='--NIEMKY--';