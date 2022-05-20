<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-VR2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIVR2--garant';
$conf['manager'] = '@--BIVR2--author, @--BIVR2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-VR2--';
$conf['edux']['subject']['code']['clean']='--BIVR2--';