<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SI1.2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISI1.2--garant';
$conf['manager'] = '@--BISI1.2--author, @--BISI1.2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SI1.2--';
$conf['edux']['subject']['code']['clean']='--BISI1.2--';