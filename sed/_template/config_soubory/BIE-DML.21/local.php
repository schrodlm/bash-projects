<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-DML.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEDML.21--garant';
$conf['manager'] = '@--BIEDML.21--author, @--BIEDML.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-DML.21--';
$conf['edux']['subject']['code']['clean']='--BIEDML.21--';