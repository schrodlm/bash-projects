<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-MA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKMA1.21--garant';
$conf['manager'] = '@--BIKMA1.21--author, @--BIKMA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-MA1.21--';
$conf['edux']['subject']['code']['clean']='--BIKMA1.21--';