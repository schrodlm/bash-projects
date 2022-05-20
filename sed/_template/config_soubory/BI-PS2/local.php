<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PS2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPS2--garant';
$conf['manager'] = '@--BIPS2--author, @--BIPS2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PS2--';
$conf['edux']['subject']['code']['clean']='--BIPS2--';