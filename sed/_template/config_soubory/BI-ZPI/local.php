<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZPI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZPI--garant';
$conf['manager'] = '@--BIZPI--author, @--BIZPI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZPI--';
$conf['edux']['subject']['code']['clean']='--BIZPI--';