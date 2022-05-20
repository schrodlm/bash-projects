<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PJP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPJP--garant';
$conf['manager'] = '@--BIPJP--author, @--BIPJP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PJP--';
$conf['edux']['subject']['code']['clean']='--BIPJP--';