<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MIT--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMIT--garant';
$conf['manager'] = '@--BIMIT--author, @--BIMIT--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MIT--';
$conf['edux']['subject']['code']['clean']='--BIMIT--';