<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ST3--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIST3--garant';
$conf['manager'] = '@--BIST3--author, @--BIST3--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ST3--';
$conf['edux']['subject']['code']['clean']='--BIST3--';