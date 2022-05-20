<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-AAG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEAAG--garant';
$conf['manager'] = '@--BIEAAG--author, @--BIEAAG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-AAG--';
$conf['edux']['subject']['code']['clean']='--BIEAAG--';