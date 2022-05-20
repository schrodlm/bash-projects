<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PNO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPNO--garant';
$conf['manager'] = '@--BIPNO--author, @--BIPNO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PNO--';
$conf['edux']['subject']['code']['clean']='--BIPNO--';