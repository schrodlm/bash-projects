<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-JUL.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIJUL.21--garant';
$conf['manager'] = '@--BIJUL.21--author, @--BIJUL.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-JUL.21--';
$conf['edux']['subject']['code']['clean']='--BIJUL.21--';