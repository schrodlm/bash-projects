<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-SCE2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIESCE2--garant';
$conf['manager'] = '@--NIESCE2--author, @--NIESCE2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-SCE2--';
$conf['edux']['subject']['code']['clean']='--NIESCE2--';