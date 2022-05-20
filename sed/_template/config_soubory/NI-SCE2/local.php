<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SCE2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISCE2--garant';
$conf['manager'] = '@--NISCE2--author, @--NISCE2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SCE2--';
$conf['edux']['subject']['code']['clean']='--NISCE2--';