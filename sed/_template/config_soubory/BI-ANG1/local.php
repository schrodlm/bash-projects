<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ANG1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIANG1--garant';
$conf['manager'] = '@--BIANG1--author, @--BIANG1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ANG1--';
$conf['edux']['subject']['code']['clean']='--BIANG1--';