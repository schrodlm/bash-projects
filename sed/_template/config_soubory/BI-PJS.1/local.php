<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PJS.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPJS.1--garant';
$conf['manager'] = '@--BIPJS.1--author, @--BIPJS.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PJS.1--';
$conf['edux']['subject']['code']['clean']='--BIPJS.1--';