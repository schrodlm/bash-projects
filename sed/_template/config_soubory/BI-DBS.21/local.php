<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-DBS.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIDBS.21--garant';
$conf['manager'] = '@--BIDBS.21--author, @--BIDBS.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-DBS.21--';
$conf['edux']['subject']['code']['clean']='--BIDBS.21--';