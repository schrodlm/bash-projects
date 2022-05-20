<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-ADW.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKADW.1--garant';
$conf['manager'] = '@--BIKADW.1--author, @--BIKADW.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-ADW.1--';
$conf['edux']['subject']['code']['clean']='--BIKADW.1--';