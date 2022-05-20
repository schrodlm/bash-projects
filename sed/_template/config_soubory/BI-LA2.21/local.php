<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-LA2.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BILA2.21--garant';
$conf['manager'] = '@--BILA2.21--author, @--BILA2.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-LA2.21--';
$conf['edux']['subject']['code']['clean']='--BILA2.21--';