<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-TUR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKTUR--garant';
$conf['manager'] = '@--BIKTUR--author, @--BIKTUR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-TUR--';
$conf['edux']['subject']['code']['clean']='--BIKTUR--';