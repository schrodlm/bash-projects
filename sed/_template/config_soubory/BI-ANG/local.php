<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ANG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIANG--garant';
$conf['manager'] = '@--BIANG--author, @--BIANG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ANG--';
$conf['edux']['subject']['code']['clean']='--BIANG--';