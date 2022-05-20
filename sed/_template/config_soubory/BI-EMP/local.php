<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EMP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEMP--garant';
$conf['manager'] = '@--BIEMP--author, @--BIEMP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EMP--';
$conf['edux']['subject']['code']['clean']='--BIEMP--';