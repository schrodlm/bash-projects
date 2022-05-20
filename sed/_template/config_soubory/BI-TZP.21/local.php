<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TZP.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITZP.21--garant';
$conf['manager'] = '@--BITZP.21--author, @--BITZP.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TZP.21--';
$conf['edux']['subject']['code']['clean']='--BITZP.21--';