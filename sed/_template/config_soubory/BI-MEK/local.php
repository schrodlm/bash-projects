<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MEK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMEK--garant';
$conf['manager'] = '@--BIMEK--author, @--BIMEK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MEK--';
$conf['edux']['subject']['code']['clean']='--BIMEK--';