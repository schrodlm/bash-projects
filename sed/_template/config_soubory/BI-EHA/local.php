<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EHA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEHA--garant';
$conf['manager'] = '@--BIEHA--author, @--BIEHA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EHA--';
$conf['edux']['subject']['code']['clean']='--BIEHA--';