<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TS1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITS1--garant';
$conf['manager'] = '@--BITS1--author, @--BITS1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TS1--';
$conf['edux']['subject']['code']['clean']='--BITS1--';