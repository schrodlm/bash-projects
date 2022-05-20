<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EP2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEP2--garant';
$conf['manager'] = '@--BIEP2--author, @--BIEP2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EP2--';
$conf['edux']['subject']['code']['clean']='--BIEP2--';