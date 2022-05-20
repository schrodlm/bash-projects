<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-LA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BILA1.21--garant';
$conf['manager'] = '@--BILA1.21--author, @--BILA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-LA1.21--';
$conf['edux']['subject']['code']['clean']='--BILA1.21--';