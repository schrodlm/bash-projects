<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-APS.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEAPS.1--garant';
$conf['manager'] = '@--BIEAPS.1--author, @--BIEAPS.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-APS.1--';
$conf['edux']['subject']['code']['clean']='--BIEAPS.1--';