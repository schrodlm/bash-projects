<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PMA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPMA--garant';
$conf['manager'] = '@--BIPMA--author, @--BIPMA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PMA--';
$conf['edux']['subject']['code']['clean']='--BIPMA--';