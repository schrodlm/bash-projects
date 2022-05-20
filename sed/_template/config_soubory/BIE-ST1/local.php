<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ST1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEST1--garant';
$conf['manager'] = '@--BIEST1--author, @--BIEST1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ST1--';
$conf['edux']['subject']['code']['clean']='--BIEST1--';