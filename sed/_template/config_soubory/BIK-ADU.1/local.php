<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-ADU.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKADU.1--garant';
$conf['manager'] = '@--BIKADU.1--author, @--BIKADU.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-ADU.1--';
$conf['edux']['subject']['code']['clean']='--BIKADU.1--';