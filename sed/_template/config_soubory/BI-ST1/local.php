<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ST1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIST1--garant';
$conf['manager'] = '@--BIST1--author, @--BIST1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ST1--';
$conf['edux']['subject']['code']['clean']='--BIST1--';