<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-BLO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEBLO--garant';
$conf['manager'] = '@--NIEBLO--author, @--NIEBLO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-BLO--';
$conf['edux']['subject']['code']['clean']='--NIEBLO--';