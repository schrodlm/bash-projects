<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ANGS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIANGS--garant';
$conf['manager'] = '@--BIANGS--author, @--BIANGS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ANGS--';
$conf['edux']['subject']['code']['clean']='--BIANGS--';