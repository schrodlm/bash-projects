<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PSI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPSI--garant';
$conf['manager'] = '@--BIPSI--author, @--BIPSI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PSI--';
$conf['edux']['subject']['code']['clean']='--BIPSI--';