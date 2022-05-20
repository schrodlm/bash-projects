<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-BKO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEBKO--garant';
$conf['manager'] = '@--NIEBKO--author, @--NIEBKO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-BKO--';
$conf['edux']['subject']['code']['clean']='--NIEBKO--';