<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-BEZ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIBEZ--garant';
$conf['manager'] = '@--BIBEZ--author, @--BIBEZ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-BEZ--';
$conf['edux']['subject']['code']['clean']='--BIBEZ--';