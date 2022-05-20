<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PAI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPAI--garant';
$conf['manager'] = '@--BIPAI--author, @--BIPAI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PAI--';
$conf['edux']['subject']['code']['clean']='--BIPAI--';