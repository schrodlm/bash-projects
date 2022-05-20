<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-DAN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIDAN--garant';
$conf['manager'] = '@--BIDAN--author, @--BIDAN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-DAN--';
$conf['edux']['subject']['code']['clean']='--BIDAN--';