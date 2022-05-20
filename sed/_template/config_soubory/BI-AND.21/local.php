<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-AND.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIAND.21--garant';
$conf['manager'] = '@--BIAND.21--author, @--BIAND.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-AND.21--';
$conf['edux']['subject']['code']['clean']='--BIAND.21--';