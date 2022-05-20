<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PGA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPGA--garant';
$conf['manager'] = '@--BIPGA--author, @--BIPGA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PGA--';
$conf['edux']['subject']['code']['clean']='--BIPGA--';